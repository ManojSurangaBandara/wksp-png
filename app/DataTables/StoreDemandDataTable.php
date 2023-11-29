<?php

namespace App\DataTables;

use App\Models\StoreDemand;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class StoreDemandDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable($query)
    {
        return datatables()
        ->eloquent($query)
        ->addIndexColumn()
        ->addColumn('action', function ($item) {
            return '<div class="w-80"></div><a href="' . route('storeDemand.show', $item->id) . '" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>
            <a href="' . route('storeDemand.edit', $item->id) . '" class="btn btn-xs btn-info"><i class="fa fa-pen"></i></a>
            <form  action="' . route('storeDemand.destroy', $item->id) . '" method="POST" class="d-inline" >
           ' . csrf_field() . '
               ' . method_field("DELETE") . '
           <button type="submit"  class="btn bg-danger btn-xs  dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700" onclick="return confirm(\'Do you need to delete this\');">
           <i class="fa fa-trash-alt"></i></button>
           </form> </div>';
        })->rawColumns(['active', 'action']);



    }

    /**
     * Get the query source of dataTable.
     */
    public function query(StoreDemand $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('store_demands-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('#')->searchable(false)->orderable(false),
            Column::make('army_no')->title("Vehicle Number"),
            Column::make('section_no')->title("Section Number"),
            //Column::make('control_no')->title("Control Number"),
            Column::make('receipt_no')->title("Receipt Number"),
            Column::make('receipt_date')->title("Receipt Date"),
           // Column::make('group_workshop')->title("Vehicle Group Workshop"),
            //Column::make('depot_workshop')->title("Vehicle Depot Workshop"),
            //Column::make('order_no')->title("Order Number"),
            Column::make('from_workshop')->title("Workshop"),
            Column::make('passed_to')->title("Passed to"),
            //Column::make('passed_date')->title("Passed Date"),

            Column::make('part_no')->title("Spare Parts Number"),
            Column::make('vote_no')->title("Vote Number"),
            Column::make('vehicle_desc')->title("Vehicle Details"),
            Column::make('quantity')->title("Quantity"),

            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(200)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'StoreDemand_' . date('YmdHis');
    }
}
