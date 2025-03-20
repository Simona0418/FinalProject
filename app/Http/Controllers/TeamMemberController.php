<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\Position;
use App\Http\Requests\TeamMemberRequest;


class TeamMemberController extends Controller
{
   public function index()
    {
        $teamMembers = TeamMember::with('position')->get();
        $positions = Position::all();
        $columns = [ 'Name', 'Surname', 'Position', 'Short Profile'];
        $fields = [ 'name', 'surname', 'position.name' , 'short_profile'];
        $data = $teamMembers;
        // dd($data);
        $editRoute = 'team_members.edit';
        $deleteRoute = 'team_members.destroy';
        $createRoute = 'team_members.create';
        $entityName = 'Team Member';
        return view('dashboard.team_members.index', compact('teamMembers', 'positions' ,'columns', 'fields', 'data', 'editRoute', 'deleteRoute', 'createRoute', 'entityName'));
    }

    public function edit($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        $positions = Position::all();
        $fields = [
        [
            'type' => 'text',
            'name' => 'picture',
            'label' => 'Picture',
            'value' => $teamMember->picture,
        ],
        [
            'type' => 'text',
            'name' => 'name',
            'label' => 'Name',
            'value' => $teamMember->name,
        ],
        [
            'type' => 'text',
            'name' => 'surname',
            'label' => 'Surname',
            'value' => $teamMember->surname,
        ],
        [
            'type' => 'select',
            'name' => 'position_id',
            'label' => 'Position',
            'options' => $positions->pluck('name', 'id')->toArray(),
            'value' => $teamMember->position_id,
        ],
        [
            'type' => 'text',
            'name' => 'short_profile',
            'label' => 'Short Profile',
            'value' => $teamMember->short_profile,
        ]
    ];
        
        return view('dashboard.team_members.edit', compact('teamMember', 'positions', 'fields'));
    }

    public function update(TeamMemberRequest $request, $id)
    {
        $teamMember = TeamMember::findOrFail($id);
        $teamMember->update($request->validated());
        return redirect()->route('dashboard.team_members.index')->with('success', 'Team Member updated successfully!');
    }

    public function destroy($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        $teamMember->delete();
        return redirect()->route('dashboard.team_members.index')->with('success', 'Team Member deleted successfully!');
    }

    public function create()
    {
        $positions = Position::all();
         $fields = [
        [
            'type' => 'text',
            'name' => 'picture',
            'label' => 'Picture',
            'value' => '',
        ],
        [
            'type' => 'text',
            'name' => 'name',
            'label' => 'Name',
            'value' => '',
        ],
        [
            'type' => 'text',
            'name' => 'surname',
            'label' => 'Surname',
            'value' => '',
        ],
        [
            'type' => 'select',
            'name' => 'position_id',
            'label' => 'Position',
            'options' => $positions->pluck('name', 'id')->toArray(),
            'value' => '',
        ],
        [
            'type' => 'text',
            'name' => 'short_profile',
            'label' => 'Short Profile',
            'value' => '',
        ]
    ];
        
        return view('dashboard.team_members.create', compact('positions', 'fields'));
    }

    public function store(TeamMemberRequest $request)
    {
        $teamMember = new TeamMember($request->validated());
        $teamMember->save();
        return redirect()->route('dashboard.team_members.index')->with('success', 'Team Member created successfully!');
    }
}

