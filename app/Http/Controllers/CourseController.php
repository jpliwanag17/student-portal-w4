<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    private array $courses = [
        ['code' => 'WEBDEV3', 'title' => 'Web Framework Laravel Development', 'units' => 5, 'description' => 'Master MVC architecture, controllers, Blade templates, and Eloquent.'],
        ['code' => 'DBMS2', 'title' => 'Advanced Database Systems', 'units' => 3, 'description' => 'Relational modeling, query optimization, and normalization.'],
        ['code' => 'SE1', 'title' => 'Software Engineering 1', 'units' => 3, 'description' => 'SDLC methodologies, agile workflows, and system analysis.']
    ];

    public function index(Request $request)
    {
        $search = $request->query('q', '');
        $courses = $this->courses;

        if ($search) {
            $courses = array_filter($courses, function ($course) use ($search) {
                return stripos($course['title'], $search) !== false || stripos($course['code'], $search) !== false;
            });
        }

        return view('courses.index', compact('courses', 'search'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('courses.index')->with('success', 'Course added successfully!');
    }

    public function show(string $code)
    {
        $course = collect($this->courses)->firstWhere('code', strtoupper($code));

        abort_unless($course, 404);

        return view('courses.show', compact('course'));
    }

    public function edit(string $id)
    {
        return 'edit() — coming in Week 8';
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('courses.index');
    }

    public function destroy(string $id)
    {
        return redirect()->route('courses.index');
    }
}