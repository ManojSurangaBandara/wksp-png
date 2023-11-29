<?php

namespace App\DataTables;

use App\Models\G7;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class G7DataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                return '<div class="w-80"></div><a href="' . route('g7.show', $item->id) . '" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>
                <a href="' . route('g7.edit', $item->id) . '" class="btn btn-xs btn-info"><i class="fa fa-pen"></i></a>
                <form  action="' . route('g7.destroy', $item->id) . '" method="POST" class="d-inline" >
               ' . csrf_field() . '
                   ' . method_field("DELETE") . '
               <button type="submit"  class="btn bg-danger btn-xs  dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700" onclick="return confirm(\'Do you need to delete this\');">
               <i class="fa fa-trash-alt"></i></button>
               </form> </div>';
            })->rawColumns(['active', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\G7 $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(G7 $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('g7_s-table')
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
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('#')->searchable(false)->orderable(false),
            Column::make('job_id')->title("Job Referance No"),
            Column::make('reg_date')->title("Registered Date"),
            Column::make('army_no')->title("Vehicle Number"),
            Column::make('organization')->title("Vehicle Authority"),
            //Column::make('repair_type')->title("Repair Type"),
            //Column::make('job_type')->title("Job Type"),
            Column::make('nature_service')->title("Nature of Service"),
            

            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(200)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'g7_s_' . date('YmdHis');
    }
}
