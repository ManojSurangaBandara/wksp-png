<?php

namespace App\DataTables;

use App\Models\JobCard;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;


use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;


class JobCardDataTable extends DataTable
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
                return '<div class="w-80"></div><a href="' . route('jobCard.show', $item->id) . '" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>
                <a href="' . route('jobCard.edit', $item->id) . '" class="btn btn-xs btn-info"><i class="fa fa-pen"></i></a>
                <form  action="' . route('jobCard.destroy', $item->id) . '" method="POST" class="d-inline" >
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
    public function query(JobCard $model)
    {
        return $model->newQuery()->with(['Spare_parts']);

    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('job_cards-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->scrollX(false)
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('#')->searchable(false)->orderable(false),
            Column::make('job_id')->title("Job Number"),
            Column::make('nature_of_repair')->title("Nature of Repair"),
            //Column::make('wd_no')->title("Word Number"),
            //Column::make('in_inspect_date')->title("In Inspected Date"),
            //Column::make('work_start_date')->title("Job Start Date"),
            //Column::make('work_end_date')->title("Job End Date"),
            Column::make('repair_req')->title("Repairs Required"),
            Column::make('spare_parts.name')->title("Spare Parts"),
            Column::make('spare_parts.qty')->title("Qty"),
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
        return 'JobCard_' . date('YmdHis');
    }
}
