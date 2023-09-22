<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Nco;
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
}
