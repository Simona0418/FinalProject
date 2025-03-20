<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;
use App\Http\Requests\IndustryRequest;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::all();
        $columns = ['Name', 'Description'];
        $fields = ['name', 'description'];
        $data = $industries;
        $editRoute = 'industries.edit';
        $deleteRoute = 'industries.destroy';
        $createRoute = 'industries.create';
        $entityName = 'Industry';
        return view('dashboard.industries.index', compact('industries', 'columns', 'fields', 'data', 'editRoute', 'deleteRoute', 'createRoute', 'entityName'));
    }

    public function edit($id)
    {
        $industry = Industry::findOrFail($id);
        $fields = [
            ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'value' => $industry->name],
            ['type' => 'textarea', 'name' => 'description', 'label' => 'Description', 'value' => $industry->description],
            ['type' => 'text', 'name' => 'icon', 'label' => 'Icon', 'value' => $industry->icon],
        ];

        return view('dashboard.industries.edit', compact('industry', 'fields'));
    }

    public function update(IndustryRequest $request, $id)
    {
        $industry = Industry::findOrFail($id);
        $industry->update($request->validated());
        return redirect()->route('dashboard.industries.index')->with('success', 'Industry updated successfully!');
    }

    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        $industry->delete();
        return redirect()->route('dashboard.industries.index')->with('success', 'Industry deleted successfully!');
    }

    public function create()
    {
        $fields = [
            ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'value' => ''],
            ['type' => 'textarea', 'name' => 'description', 'label' => 'Description', 'value' => ''],
            ['type' => 'text', 'name' => 'icon', 'label' => 'Icon', 'value' => ''],
        ];

        return view('dashboard.industries.create', compact('fields'));
    }

    public function store(IndustryRequest $request)
    {
        $industry = new Industry($request->validated());
        $industry->save();
        return redirect()->route('dashboard.industries.index')->with('success', 'Industry created successfully!');
    }
}

