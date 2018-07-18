<?php

namespace App\DataTables;

use App\Http\Controllers\LoggedUserController;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class RoleDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'roles.datatables_actions')
//            ->addColumn('permission','<div class="btn-group"><a href="#attach-permissions-modal" data-toggle="modal" class="attach-pms-btn btn btn-xs btn-primary"><i class="glyphicon glyphicon-paperclip"></i> Attach Permissions</a></div>' ,3)
            ->addColumn('permission',function (Role $role){
                return '<div class="btn-group"><a href="#attach-permissions-modal" r-id="'.$role->id.'" data-toggle="modal" class="attach-pms-btn btn btn-xs btn-primary"> Attach Permissions</a></div>';
            } ,3)
            ->rawColumns(['action','permission','role_status'])
            ->editColumn('role_status',function(Role $role){
                $btn = '<label class="label label-danger">Inactive</label>';
                if($role->role_status){
                    $btn = '<label class="label label-success">Active</label>';
                }
                return $btn;
            })
            ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Role $model){

        if(LoggedUserController::isSystemAdmin()){
            $query = $model->newQuery();
        }else{
            if(LoggedUserController::isAllAccessGranted()){
                $query = $model->newQuery()->where('tenant_id',Auth::user()->tenant_id);
            }else{
                $query = $model->newQuery()->where([['tenant_id',Auth::user()->tenant_id],['created_by',Auth::id()]]);
            }
        }
//        dd($query);
        return $query
            ->orderByDesc('id')
            ->with('accessLevel');
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

            ->addColumn([
                'defaultContent' => '',
                'data'           => 'permission',
                'name'           => 'permission',
                'title'          => 'Assign Permissions',
                'render'         => null,
                'orderable'      => false,
                'searchable'     => false,
                'exportable'     => false,
                'printable'      => false,
                'footer'         => '',
                'width' => '80px'
            ])
            ->addAction(['width' => '80px'])
//            ->addAction(['width' => '80px',"title"=>"Permission",'name'=>"permissions"])
            ->parameters([
                'dom'     => 'Bfrtip',
//                'order'   => [[0, 'desc']],
                'buttons' => [
//                    'create',
//                    'export',
//                    'print',
//                    'reset',
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
            'code',
            'name',
            'access_level.name'=>[
                'title'=>'Access Level'
            ]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'rolesdatatable_' . time();
    }
}