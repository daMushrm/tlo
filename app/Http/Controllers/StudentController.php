<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Group;
use App\Models\Student;

class StudentController extends Controller
{
    public function index($group)
    {
        $students = Student::where('group_id', $group)->get();
        return view('students.index', ['students' => $students]);
    }

    public function show(Student $student)
    {
        return view('students.show', ['student' => $student]);
    }

    public function create(Grade $grade, $group)
    {
        return view('students.create', ['grade' => $grade, 'group' => $group]);
    }

    public function store($grade, $group)
    {
        $data = request()->all();
        $data['group_id'] = $group;

        Student::create($data);

        return to_route('students.index', ['group' => $group, 'grade' => $grade]);
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
