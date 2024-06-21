<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leader;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaders = Leader::all();
        return view('admin.leader.index', compact('leaders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.leader.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'acceptance' => 'required',
            'image' => 'required',
            'biografiya' => 'required',
            'majburiyatlar' => 'required',
            'faoliyat' => 'required',
         ]);

        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/leaders',  $image_name);
            $requestData['image'] = $image_name;
        }

        Leader::create($requestData);
        return redirect()->route('admin.leader.index')->with('seccess', 'Leader created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Leader $leader)
    {
        return view('admin.leader.show', compact('leader'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leader $leader)
    {
        return view('admin.leader.edit', compact('leader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leader $leader)
    {
        $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'acceptance' => 'required',
            'biografiya' => 'required',
            'majburiyatlar' => 'required',
            'faoliyat' => 'required',
         ]);

        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/leaders',  $image_name);
            $requestData['image'] = $image_name;
        }

        $leader->update($requestData);
        return redirect()->route('admin.leader.index')->with('seccess', 'Leader edited successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leader $leader)
    {
        $leader->delete();
        return redirect()->route('admin.leader.index')->with('seccess', 'Leader deleted successfuly');
    }
}
