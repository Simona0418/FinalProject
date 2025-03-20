<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('serviceCategory', 'serviceIndustry')->get();
        $service_categories = ServiceCategory::all();
        $industries = Industry::all();
        $columns = ['Name', 'Description', 'Service Category', 'Industry'];
        $fields = ['name', 'description', 'serviceCategory.name', 'serviceIndustry.name'];
        $data = $services;
        $editRoute = 'services.edit';
        $deleteRoute = 'services.destroy';
        $createRoute = 'services.create';
        $entityName = 'Service';
        return view('dashboard.services.index', compact('services', 'service_categories', 'industries', 'columns', 'fields', 'data', 'editRoute', 'deleteRoute', 'createRoute', 'entityName'));
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $service_categories = ServiceCategory::all();
        $industries = Industry::all();
        $fields = [
            ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'value' => $service->name],
            ['type' => 'textarea', 'name' => 'description', 'label' => 'Description', 'value' => $service->description],
            ['type' => 'select', 'name' => 'service_category_id', 'label' => 'Service Category', 'options' => $service_categories->pluck('name', 'id')->toArray(), 'value' => $service->service_category_id],
            ['type' => 'select', 'name' => 'industry_id', 'label' => 'Industry', 'options' => $industries->pluck('name', 'id')->toArray(), 'value' => $service->industry_id],
        ];
        return view('dashboard.services.edit', compact('service', 'service_categories', 'industries', 'fields'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $service->update($request->validated());
        return redirect()->route('dashboard.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('dashboard.services.index')->with('success', 'Service deleted successfully.');
    }

    public function create()
    {
        $service_categories = ServiceCategory::all();
        $industries = Industry::all();
        $fields = [
            ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'value' => ''],
            ['type' => 'textarea', 'name' => 'description', 'label' => 'Description', 'value' => ''],
            ['type' => 'select', 'name' => 'service_category_id', 'label' => 'Service Category', 'options' => $service_categories->pluck('name', 'id')->toArray(), 'value' => '', 'selected' => $service_categories->first()->id],
            ['type' => 'select', 'name' => 'industry_id', 'label' => 'Industry', 'options' => $industries->pluck('name', 'id')->toArray(), 'value' => ''],
        ];
        return view('dashboard.services.create', compact('service_categories', 'industries', 'fields'));
    }

    public function store(ServiceRequest $request)
    {
        $service = new Service($request->validated());
        $service->save();
        return redirect()->route('dashboard.services.index')->with('success', 'Service created successfully.');
    }
}
