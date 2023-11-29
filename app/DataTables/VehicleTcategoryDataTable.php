<?php

namespace App\DataTables;

use App\Models\VehicleTcategory;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class VehicleTcategoryDataTable extends DataTable
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
                return '<div class="w-80"></div><a href="' . route('vehicleTcategory.show', $item->id) . '" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>
            <a href="' . route('vehicleTcategory.edit', $item->id) . '" class="btn btn-xs btn-info"><i class="fa fa-pen"></i></a>
            <form  action="' . route('vehicleTcategory.destroy', $item->id) . '" method="POST" class="d-inline" >
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
     * @param \App\Models\VehicleTcategory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(VehicleTcategory $model)
    {
        return $model->newQuery()->with(['parent', 'parent1']);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('vehicle_tcategories-table')
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
            Column::make('name')->title("Name"),
            Column::make('parent.name')->title("Vehicle Parts Main Category"),
            Column::make('parent1.name')->title("Vehicle Parts Sub Category"),
            Column::make('created_at')->title("Created Date"),
            Column::make('updated_at')->title("Update Date"),
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
        return 'vehicle_tcategories' . date('YmdHis');
    }
}
