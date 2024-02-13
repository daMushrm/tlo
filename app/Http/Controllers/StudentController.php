<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Group;
use App\Models\Student;

class StudentController extends Controller
{
    public function index($grade, $group)
    {
        $students = Student::where('grade_id', $grade)->where('group_id', $group)->get();
        return view('students.index', ['students' => $students]);
    }

    public function show($grade, $group, $student)
    {
        $student = Student::find($student)::where('grade_id', $grade)::where('group_id', $group)->get();
        return view('students.show', ['student' => $student]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Grade $grade)
    {
        $data = request()->all();

        $grade->groups()->students()->create($data);

        return to_route('students.index');
    }

    public function edit($grade, $group, $student)
    {
        $student = Student::find($student)::where('grade_id', $grade)::where('group_id', $group)->get();
        return view('students.edit', ['student' => $student]);
    }

    public function update($grade, $group, $student)
    {
        $data = request()->all();

        $student = Student::find($student)::where('grade_id', $grade)::where('group_id', $group)->get();
        $student->update($data);

        return to_route('students.show', $student);
    }

    public function destroy($grade, $group, $student)
    {
        $student = Student::find($student)::where('grade_id', $grade)::where('group_id', $group)->get();
        $student->delete();

        return to_route('students.index');
    }
}
