<?php

namespace App\DataTables;

use App\Models\CustomerMessage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class CustomerMessageDataTable extends DataTable
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
            ->editColumn('status',function($message){
                if($message->status == 'DELIVERED'){
                    return '<label class="label label-success">DELIVERED</label>';
                }else if($message->status == 'PENDING'){
                    return '<label class="label label-warning">PENDING</label>';
                }
                return $message->status;
            })
            ->editColumn('sent',function($message){
                if($message->sent){
                    return '<label class="label label-success">Sent</label>';
                }
                return '<label class="label label-warning">Pending</label>';
            })
            ->editColumn('updated_at',function($date){
                return Carbon::parse($date->updated_at)->toDayDateTimeString();
            })
            ->addColumn('action', 'customer_messages.datatables_actions')
            ->rawColumns(['sent','status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(CustomerMessage $model)
    {
        return $model->newQuery()->where('tenant_id',Auth::user()->tenant_id)->orderByDesc('id');
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
//            ->addAction(['width' => '80px'])
            ->parameters([
//                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => [
                    'create',
                    'export',
                    'print',
                    'reset',
                    'reload',
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
            'phone_number',
            'name',
//            'user_id',
            'message',
            'updated_at'=>[
                'title'=>"Message Date"
            ],
            'sent',

            'status',
            'smsCount'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'customer_messagesdatatable_' . time();
    }
}