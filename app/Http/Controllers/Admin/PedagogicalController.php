<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedagogical;

class PedagogicalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedagogicals = Pedagogical::all();
        return view('admin.pedagogical.index', compact('pedagogicals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pedagogical.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'number' => 'required',
         ]);

        $requestData = $request->all();

        Pedagogical::create($requestData);
        return redirect()->route('admin.pedagogical.index')->with('seccess', 'Pedagogical created saccessfuly');
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
    public function edit(Pedagogical $pedagogical)
    {
        return view('admin.pedagogical.edit', compact('pedagogical'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedagogical $pedagogical)
    {
        $this->validate($request, [
            'title' => 'required',
            'number' => 'required',
         ]);

        $requestData = $request->all();

        $pedagogical->update($requestData);
        return redirect()->route('admin.pedagogical.index')->with('seccess', 'Pedagogical edited saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedagogical $pedagogical)
    {
        $pedagogical->delete();
        return redirect()->route('admin.pedagogical.index')->with('seccess', 'Pedagogical deleted saccessfuly');
    }
}
