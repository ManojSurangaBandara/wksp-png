<?php

namespace App\DataTables;

use App\Models\TechnicalDetail;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;


class TechnicalDetailDataTable extends DataTable
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
        ->addColumn('action', content: function ($item) {

//            return $item;

            return '<div class="w-80"></div><a href="' . route('technicalDetail.show', $item->id) . '" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>
            <a href="' . route('technicalDetail.edit', $item->id) . '" class="btn btn-xs btn-info"><i class="fa fa-pen"></i></a>

            <form  action="' . route('technicalDetail.destroy', $item->id) . '" method="POST" class="d-inline" >
           ' . csrf_field() . '
               ' . method_field("DELETE") . '
           <button type="submit"  class="btn bg-danger btn-xs  dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700" onclick="return confirm(\'Do you need to delete this\');">
           <i class="fa fa-trash-alt"></i></button>
           </form>

           </div>';


        })->rawColumns(['active', 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(TechnicalDetail $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('technical_details-table')
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
            Column::make('repair_type')->title("Repair Type"),
            Column::make('nature_of_repair')->title("Nature of Repair"),
            Column::make('spare_part')->title("Spare Parts Details"),
            Column::make('ex_item')->title("Expendable Item Details"),

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
        return 'technical_details' . date('YmdHis');
    }
}
