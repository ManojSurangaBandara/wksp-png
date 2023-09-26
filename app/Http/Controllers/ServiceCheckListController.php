<?php

namespace App\Http\Controllers;

use App\DataTables\ServiceCheckListDataTable;
use App\Http\Requests\ServiceCheckListRequest;
use App\Models\ServiceCheckList;
use Illuminate\Http\Request;

class ServiceCheckListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ServiceCheckListDataTable $dataTable)
    {
        return $dataTable->render('serviceCheckList.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('serviceCheckList.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceCheckListRequest $request)
    {
        ServiceCheckList::create(['name' => $request->name]);
        return redirect()->route('serviceCheckList.index')->with('message', 'Service Check List created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceCheckList $serviceCheckList)
    {
        return view('serviceCheckList.show', compact('serviceCheckList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceCheckList $serviceCheckList)
    {
        return view('serviceCheckList.edit', compact('serviceCheckList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceCheckListRequest $request, ServiceCheckList $serviceCheckList)
    {
        $serviceCheckList->update(['name' => $request->name]);
        return redirect()->route('serviceCheckList.index')->with('message', 'Service Check List update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceCheckList $serviceCheckList)
    {
        $serviceCheckList->delete();
        return redirect()->route('serviceCheckList.index')
            ->with('message', 'Service Check List deleted successfully');
    }
}
