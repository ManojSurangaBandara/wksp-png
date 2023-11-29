<?php

namespace App\Http\Controllers;

use App\Models\G7;
use App\Models\Workshop;
use App\Models\RepairType;
use App\Models\JobType;
use App\Models\User;
use App\Http\Requests\G7Request;
use Illuminate\Http\Request;
use App\DataTables\G7DataTable;

class G7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(G7DataTable $DataTable)
    {
        return $DataTable->render('g7.index');
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $userWorkshops = User::join('workshops','workshops.id','=','users.workshop_id')
         ->get(['workshops.name','workshops.id']);


        $repair_types = RepairType::all();
        $job_types = JobType::all();
        
        return view('g7.create', compact('repair_types', 'job_types', 'userWorkshops'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd(auth()->user()->workshop_id);
        
        $g7 = G7::create(['repair_type' => $request->repair_type, 'job_type' => $request->job_type, 'army_no' => $request->army_no, 'vehicle_value' => $request->vehicle_value, 'reg_date' => $request->reg_date, 'organization' => $request->organization, 'live_search_result_in_charge' => $request->live_search_result_in_charge, 'location' => $request->location, 'nature_service' => $request->nature_service]);

        //$job_count = G7::where($request->location.'/'.$request->repair_type.'/'.$request->job_type.'/'.$id)
        $id = $g7->id;
        $job_id = $request->location.'/'.$request->repair_type.'/'.$request->job_type.'/'.$id;

        //G7::update('job_id', '=', $job_id)->where('id', $id);

        G7::where('id','=', $id)->update(array('job_id' => $job_id));



        return redirect()->route('g7.index')->with('message', 'Supplier Detail created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(G7 $g7)
    {
        return view('g7.show', compact('g7'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(G7 $g7)
    {
        
        $repair_types = RepairType::all();
        $job_types = JobType::all();
        return view('g7.edit', compact('g7','repair_types', 'job_types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, G7 $g7)
    {
        $g7->update(['reg_date' => $request->reg_date, 'organization' => $request->organization, 'live_search_result_in_charge' => $request->live_search_result_in_charge, 'nature_service' => $request->nature_service]);
        return redirect()->route('g7.index')->with('message', 'Vehicle Class update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(G7 $g7)
    {
        $g7->delete();
        return redirect()->route('g7.index')
            ->with('message', 'Vehicle details deleted successfully');
    }
}
