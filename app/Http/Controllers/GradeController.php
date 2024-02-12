<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Grade;
use Inertia\Inertia;

class GradeController extends Controller
{
    public function index()
    {
        return Inertia::render('grades/index');
    }

    public function show(Grade $grade)
    {
        return Inertia::render('grades/show', ['grade' => $grade]);
    }

    public function create()
    {
        return Inertia::render('grades/create');
    }

    public function store()
    {
        $data = request()->all();

        Grade::create($data);

        return to_route('grades/index');
    }

    public function edit(Grade $grade)
    {
        return Inertia::render('grades/edit', ['grade' => $grade]);
    }

    public function update(Grade $grade)
    {
        $data = request()->all();

        $grade->update($data);

        return to_route('grades/show', $grade);
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();

        return to_route('grades/index');
    }
}
