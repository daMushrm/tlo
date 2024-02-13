<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', ['grades' => $grades]);
    }

    public function show(Grade $grade)
    {
        $groups = $grade->groups;
        return view('grades.show', ['grade' => $grade,'groups' => $groups]);
    }

    public function create()
    {
        return view('grades.create');
    }

    public function store()
    {
        $data = request()->all();

        Grade::create($data);

        return to_route('grades.index');
    }

    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grade' => $grade]);
    }

    public function update(Grade $grade)
    {
        $data = request()->all();

        $grade->update($data);

        return to_route('grades.show', $grade);
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();

        return to_route('grades.index');
    }
}
