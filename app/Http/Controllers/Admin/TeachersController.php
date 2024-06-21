<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::latest()->limit(6)->get();
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
        $this->validate($request, [
            'name' => 'required',
            'job' => 'required',
            'description' => 'required',
            'image' => 'required',
            'telegram' => 'required',
            'facebook' => 'required',
            'instgram' => 'required',
         ]);
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/teachers',  $image_name);
            $requestData['image'] = $image_name;
        }

        Teacher::create($requestData);
        return redirect()->route('admin.teachers.index')->with('seccess', 'Teacher created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $this->validate($request, [
            'name' => 'required',
            'job' => 'required',
            'description' => 'required',
            'telegram' => 'required',
            'facebook' => 'required',
            'instgram' => 'required',
         ]);
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/teachers',  $image_name);
            $requestData['image'] = $image_name;
        }

        $teacher->update($requestData);
        return redirect()->route('admin.teachers.index')->with('seccess', 'Teacher edited successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('admin.teachers.index')->with('seccess', 'Teacher deleted successfuly');
    }
}
