<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'category' => 'required',
            'image' => 'required',
        ], [
            'firstname.required' => 'Ismni kiriting',
            'last.required' => 'Familyani kiriting',
            'category.required' => 'Sohasini kiriting',
            'image.required' => 'Rasmini kiriting',
        ]);

        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $file->move(public_path('storage'), $image_name);

        Teacher::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'category' => $request->category,
            'image' => $image_name
        ]);
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'category' => 'required',
            'image' => 'required',
        ], [
            'firstname.required' => 'Ismni kiriting',
            'last.required' => 'Familyani kiriting',
            'category.required' => 'Sohasini kiriting',
            'image.required' => 'Rasmini kiriting',
        ]);
        if ($request->image) {

            // removing old image
            unlink(public_path("storage/$teacher->image"));
            // get image
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();

            $teacher->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'category' => $request->category,
                'image' => $image_name,

            ]);

            $file->move(public_path('storage'), $image_name);

        } else {
            $teacher->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'category' => $request->category,
            ]);

        }

        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back();
    }
}
