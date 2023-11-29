<?php

namespace App\DataTables;

use App\Models\SparePart;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;


class SparePartDataTable extends DataTable
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
                return '<div class="w-80"></div><a href="' . route('sparePart.show', $item->id) . '" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i></a>
                <a href="' . route('sparePart.edit', $item->id) . '" class="btn btn-xs btn-info"><i class="fa fa-pen"></i></a>
                <form  action="' . route('sparePart.destroy', $item->id) . '" method="POST" class="d-inline" >
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
     * @param \App\Models\SparePart $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(SparePart $model)
    {
        return $model->newQuery()->with(['parent', 'parent1', 'parent2', 'parent3']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('spare_parts-table')
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
            Column::make('parent2.name')->title("Name"),
            Column::make('parent.name')->title("Main category"),
            Column::make('parent1.name')->title("Secondary category"),
            Column::make('price')->title("Price"),
            Column::make('parent3.name')->title("Supplier"),
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
        return 'spare_parts_' . date('YmdHis');
    }
}
