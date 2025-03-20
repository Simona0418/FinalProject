<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
use App\Http\Requests\PositionRequest;

class PositionController extends Controller
{
     public function index()
    {
        $positions = Position::all();
        $columns = ['Name'];
        $fields = ['name'];
        $data = $positions;
        $editRoute = 'positions.edit';
        $deleteRoute = 'positions.destroy';
        $createRoute = 'positions.create';
        $entityName = 'Position';
        return view('dashboard.positions.index', compact('positions', 'columns', 'fields', 'data', 'editRoute', 'deleteRoute', 'createRoute', 'entityName'));
    }

    public function edit($id)
    {
        $position = Position::findOrFail($id);
        $fields = [
            ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'value' => $position->name]
        ];

        return view('dashboard.positions.edit', compact('position', 'fields'));
    }

    public function update(PositionRequest $request, $id)
    {
        $industry = Position::findOrFail($id);
        $industry->update($request->validated());
        return redirect()->route('dashboard.positions.index')->with('success', 'Position updated successfully!');
    }

    public function destroy($id)
    {
        $industry = Position::findOrFail($id);
        $industry->delete();
        return redirect()->route('dashboard.positions.index')->with('success', 'Position deleted successfully!');
    }

    public function create()
    {
        $fields = [
            ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'value' => ''],
        ];

        return view('dashboard.positions.create', compact('fields'));
    }

    public function store(PositionRequest $request)
    {
        $position = new Position($request->validated());
        $position->save();
        return redirect()->route('dashboard.positions.index')->with('success', 'Position created successfully!');
    }
}
