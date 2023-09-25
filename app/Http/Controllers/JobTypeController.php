<?php

namespace App\Http\Controllers;

use App\DataTables\JobTypeDataTable;
use App\Http\Requests\JobTypeRequest;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(JobTypeDataTable $dataTable)
    {
        return $dataTable->render('jobType.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobTypeRequest $request)
    {
        JobType::create(['name' => $request->name]);
        return redirect()->route('jobType.index')->with('message', 'Job Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobType $jobType)
    {
        return view('jobType.show', compact('jobType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobType $jobType)
    {
        return view('jobType.edit', compact('jobType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobTypeRequest $request, JobType $jobType)
    {
        $jobType->update(['name' => $request->name]);
        return redirect()->route('jobType.index')->with('message', 'Job Type update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobType $workshopType)
    {
        $workshopType->delete();
        return redirect()->route('jobType.index')
            ->with('message', 'Job Type deleted successfully');
    }
}
