<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=About::find(1);
        return view('admin.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
//        dd($about);
        return view('admin.about.show',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {

        if ($request->image) {
            $data = $request->all();
            if ($request->image){
                $file = $request->file('image');
                $image_name = uniqid() . $file->getClientOriginalName();
                $data['image'] = $image_name;
                $file->move(public_path('images'), $image_name);
                $about->update([
                    'name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'description' => $request->description,
                    'image' => $data['image'],
                    // don't needed information
                    'start_time' => $request->start_time,
                    'end_time' => $request->end_time,
                    'viloyat' => $request->viloyat,
                    'tuman' => $request->tuman,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                ]);
            }else{
                $about->update([
                    'name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'description' => $request->description,
                    // don't needed information
                    'start_time' => $request->start_time,
                    'end_time' => $request->end_time,
                    'viloyat' => $request->viloyat,
                    'tuman' => $request->tuman,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                ]);
            }


//            $file->move(public_path('images'), $image_name);

        } else {
            $about->update([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'description' => $request->description,
                // don't needed information
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'viloyat' => $request->viloyat,
                'tuman' => $request->tuman,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
            ]);

        }

return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
