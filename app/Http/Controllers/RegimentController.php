<?php

namespace App\Http\Controllers;

use App\DataTables\RegimentDataTable;
use App\Models\Regiment;
use Illuminate\Http\Request;

class RegimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RegimentDataTable $dataTable)
    {
        return $dataTable->render('regiment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('regiment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Regiment::create(['name' => $request->name, 'abb_name' => $request->abb_name]);
        return redirect()->route('regiment.index')->with('message', 'Regiment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Regiment $regiment
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Regiment $regiment)
    {
        return view('regiment.show', compact('regiment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Regiment $regiment
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Regiment $regiment)
    {
        return view('regiment.edit', compact('regiment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Regiment $regiment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Regiment $regiment)
    {
        $regiment->update(['name' => $request->name, 'abb_name' => $request->abb_name]);
        return redirect()->route('regiment.index')->with('message', 'Regiment update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Regiment $regiment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Regiment $regiment)
    {
        $regiment->delete();
        return redirect()->route('regiment.index')
            ->with('message', 'Regiment deleted successfully');
    }
}
