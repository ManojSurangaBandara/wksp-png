<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Nco;
use App\Models\VehicleScategory;
use App\Models\VehicleTcategory;
use App\Models\Result;
use App\Models\Stock\Category;
use App\Models\Stock\Item;
use App\Models\Trade;
use App\Models\Unit;
use App\Models\VehicleModel;
use App\Models\VehicleSubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportResult;
use App\Exports\ExportNco;
use Maatwebsite\Excel\Excel as ExcelExcel;

class ajaxController extends Controller
{
    public function getUnit(request $request)
    {
        if ($request->ajax()) {
            return Unit::where('regiment_id', $request->regiment_id)->get();
        }
    }

    public function getVehicleScategory(request $request)
    {
        if ($request->ajax()) {
            return VehicleScategory::where('parent_id1', $request->parent_id1)->get();
        }
    }

    public function getVehicleTcategory(request $request)
    {
        if ($request->ajax()) {
            return VehicleTcategory::where('parent_id2', $request->parent_id2)->get();
        }
    }

    public function getVehiclebyId(request $request)
    {
        if ($request->ajax()) {


            $curl = curl_init();

            $url = 'http://127.0.0.1:8004/api/vehicles/' . urlencode($request->search);


            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));


            $response = curl_exec($curl);

            if ($response === false) {
                // An error occurred
                $error_message = curl_error($curl); // Get the error message
                $error_code = curl_errno($curl);     // Get the error code

                // Handle the error as needed
                echo "cURL Error Code: $error_code\n";
                echo "cURL Error Message: $error_message\n";

                // Close the cURL session
                curl_close($curl);
            }

            curl_close($curl);

            // return json_encode(['tst'=> $response]);


            return response($response);

        }
    }
}
