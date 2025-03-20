<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Requests\ServiceCategoryRequest;


class ServiceCategoryController extends Controller
{
    public function index()
    {
        $service_categories = ServiceCategory::all();
        $columns = ['Name'];
        $fields = ['name'];
        $data = $service_categories;
        $editRoute = 'service_categories.edit';
        $deleteRoute = 'service_categories.destroy';
        $createRoute = 'service_categories.create';
        $entityName = 'Service Category';
        return view('dashboard.service_categories.index', compact('service_categories', 'columns', 'fields', 'data', 'editRoute', 'deleteRoute', 'createRoute', 'entityName'));
    }

    public function edit($id)
    {
        $service_category = ServiceCategory::find($id);
        $fields = [
            ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'value' => $service_category->name],
        ];
        return view('dashboard.service_categories.edit', compact('service_category', 'fields'));
    }

    public function update(ServiceCategoryRequest $request, $id)
    {
        $service_category = ServiceCategory::find($id);
        $service_category->update($request->validated());
        return redirect()->route('dashboard.service_categories.index')->with('success', 'Service Category updated successfully.');
    }

    public function destroy($id)
    {
        $service_category = ServiceCategory::find($id);
        $service_category->delete();
        return redirect()->route('dashboard.service_categories.index')->with('success', 'Service Category deleted successfully.');
    }

    public function create()
    {
        $fields = [
            ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'value' => ''],
        ];
        return view('dashboard.service_categories.create', compact('fields'));
    }

    public function store(ServiceCategoryRequest $request)
    {
        $service_category = new ServiceCategory($request->validated());
        $service_category->save();
        return redirect()->route('dashboard.service_categories.index')->with('success', 'Service Category created successfully.');
    }
}
