<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\Grade;
use App\Models\Group;

// use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index($grade)
    {
        $groups = Group::where('grade_id', $grade)->get();
        return view('groups.index', ['groups' => $groups]);
    }

    public function show(Group $group)
    {
        $students = $group->students;
        return view('groups.show', ['group' => $group, 'students' => $students]);
    }

    public function create(Grade $grade)
    {
        return view('groups.create', ['grade' => $grade]);
    }

    public function store(Grade $grade)
    {
        $data = request()->all();

        $grade->groups()->create($data);

        return to_route('groups.index', ['grade' => $grade]);
    }

    public function edit($grade, $group)
    {
        $group = Group::find($group)::where('grade_id', $grade)->get();
        return view('groups.edit', ['group' => $group]);
    }

    public function update($grade, $group)
    {
        $data = request()->all();

        $group = Group::find($group)::where('grade_id', $grade)->get();
        $group->update($data);

        return to_route('groups.show', $group);
    }

    public function destroy($grade, $group)
    {
        $group = Group::find($group)::where('grade_id', $grade)->get();
        $group->delete();

        return to_route('groups.index');
    }
}
