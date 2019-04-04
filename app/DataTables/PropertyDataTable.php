<?php

namespace App\DataTables;

use App\Models\Property;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Carbon\Carbon;

class PropertyDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
            ->editColumn('event_date',function($event){
                return Carbon::parse($event->event_date)->toFormattedDateString();
            })
            ->editColumn('created_at',function ($property){
                return '<a href="'.url('propertyFeatures/'.$property->id).'" class="btn btn-success btn-xs">view/add feature</a>';
            })->rawColumns(['action','created_at'])
            ->addColumn('action', 'properties.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Property $model)
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
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => [
//                    'create',
                    'export',
                    'print',
//                    'reset',
//                    'reload',
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'property_title',
            'status',
            'address',
            'price',
//            'image_path',
            'description',
            'created_at'=>[
                'title'=>'Features'
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'propertiesdatatable_' . time();
    }
}