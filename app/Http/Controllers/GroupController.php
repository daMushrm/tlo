<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\Grade;
use App\Models\Group;
use Inertia\Inertia;

// use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index($grade)
    {
        $groups = Group::where('grade_id', $grade)->get();
        return Inertia::render('groups/index', ['groups' => $groups]);
    }

    public function show($grade, $group)
    {
        $group = Group::find($group)::where('grade_id', $grade)->get();
        return Inertia::render('groups/show', ['group' => $group]);
    }

    public function create()
    {
        return Inertia::render('groups/create');
    }

    public function store(Grade $grade)
    {
        $data = request()->all();

        $grade->groups()->create($data);

        return to_route('groupsnindex');
    }

    public function edit($grade, $group)
    {
        $group = Group::find($group)::where('grade_id', $grade)->get();
        return Inertia::render('groups/edit', ['group' => $group]);
    }

    public function update($grade, $group)
    {
        $data = request()->all();

        $group = Group::find($group)::where('grade_id', $grade)->get();
        $group->update($data);

        return to_route('groups/show', $group);
    }

    public function destroy($grade, $group)
    {
        $group = Group::find($group)::where('grade_id', $grade)->get();
        $group->delete();

        return to_route('groups/index');
    }
}
