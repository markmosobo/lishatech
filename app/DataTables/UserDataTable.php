<?php

namespace App\DataTables;

use App\Http\Controllers\LoggedUserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class UserDataTable extends DataTable
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

        return $dataTable->
//        addColumn('action', 'users.datatables_actions')
        addColumn('action', function(User $user){
            if($user->account_status){
                return '<button  action="Deactivate" url="'.url('activatedeactivate',$user->id).'" class="btn btn-xs btn-danger act-deact">Deactivate</button>';
            }else{
                return '<button action="Activate" url="'.url('activatedeactivate',$user->id).'" class="btn btn-xs btn-success act-deact">Activate</button>';
            }
        })
            ->editColumn('email_confirmed',function(User $user){
                if($user->email_confirmed){
                    return '<button class="btn btn-xs btn-success">Yes</button>';
                }else{
                    return '<button class="btn btn-xs btn-warning">No</button>';

                }
            })
            ->editColumn('account_status',function(User $user){
                if($user->account_status){
                    return '<button class="btn btn-xs btn-success">Active</button>';
                }else{
                    return '<button class="btn btn-xs btn-warning">Blocked</button>';
                }
            })
            ->editColumn('password_changed',function(User $user){
                if($user->password_changed){
                    return '<button class="btn btn-xs btn-success">Yes</button>';
                }else{
                    return '<button class="btn btn-xs btn-warning">No</button>';
                }
            })
//            ->editColumn('status',['title'=>'Account status'])
            ->rawColumns(['action','email_confirmed','account_status','password_changed'])
            ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        if(LoggedUserController::isSystemAdmin()){
            $query = $model->newQuery();
        }else{
            if(LoggedUserController::isAllAccessGranted()){
                $query = $model->newQuery()->where('users.tenant_id',Auth::user()->tenant_id);
            }else{
                $query = $model->newQuery()->where([['users.tenant_id',Auth::user()->tenant_id],['created_by',Auth::id()]]);
            }
        }
        return $query

            ->orderByDesc('users.id')->with(['role']);
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
            'name',
            'email',
//            'password',
            'role.name'=>[
                'title'=>'Role'
            ],
            'password_changed',
            'email_confirmed',
            'account_status',
//            'remember_token'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'usersdatatable_' . time();
    }
}