<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistics = Statistic::all();
        return view('admin.statistic.index', compact('statistics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statistic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'count' => 'required',
            'icon' => 'required',
         ]);

        $requestData = $request->all();

        Statistic::create($requestData);
        return redirect()->route('admin.statistic.index')->with('seccess', 'Statistic created saccessfuly');
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
    public function edit(Statistic $statistic)
    {
        return view('admin.statistic.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statistic $statistic)
    {
        $this->validate($request, [
            'title' => 'required',
            'count' => 'required',
            'icon' => 'required',
         ]);

        $requestData = $request->all();

        $statistic->update($requestData);
        return redirect()->route('admin.statistic.index')->with('seccess', 'Statistic edited saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistic $statistic)
    {
        $statistic->delete();
        return redirect()->route('admin.statistic.index')->with('seccess', 'Statistic deleted saccessfuly');
    }
}
