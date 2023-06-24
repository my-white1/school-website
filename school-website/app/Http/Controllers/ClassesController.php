<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Teacher;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=Classes::with('teacher')->get();
        return view('admin.classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher=Teacher::pluck('firstname','id');
        return view('admin.classes.create',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'number'=>'required',
           'name'=>'required',
           'teacher_id'=>'required',
           'description'=>'required|min:10',
        ],[
            'number.required'=>'Sinf raqami kiritilmadi',
            'name.required'=>'Sinf Harifi kiritilmadi',
            'teacher_id.required'=>'Sinf Raxbari tanlanmadi',
            'description.required'=>'Sinf Haqida ma\'lumot kiritilmadi',
            'description.min'=>'Sinf haqida ma\'lumot 10 ta so\'zdan kam b\'lmasligi kerak',
        ]);
        dd($request->all());
        Teacher::create($request->all());
        return redirect()->route('classes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $classes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $classes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $classes)
    {
        //
    }
}
