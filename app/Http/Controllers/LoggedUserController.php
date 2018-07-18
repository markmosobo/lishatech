<?php

namespace App\Http\Controllers;

use App\Models\AccessLevel;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoggedUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function getAccessLevel(){
        $accessLevelCode = '';
        $role_id = Auth::user()->role_id;
        $accessLevelId = Role::find($role_id)->access_level_id;

        $accessLName = AccessLevel::find($accessLevelId);
        if(!is_null($accessLName)){
            $accessLevelCode = $accessLName->code;
        }
        return $accessLevelCode;
    }

    public function unAuthorized(){
        return view('unauthorized.unAuthorized');
    }

    public static function isSystemAdmin(){
        $role_id = Auth::user()->role_id;
        $role_code = Role::find($role_id)->code;
        if($role_code === 'SYSADMIN' ){
            return true;
        }
        return false;
    }

    public static function isAllAccessGranted(){
        $accessLevel = AccessLevel::first()->code;
        $role_id = Auth::user()->role_id;
        $accessLevelId = Role::find($role_id)->access_level_id;

        $accessLName = AccessLevel::find($accessLevelId);
        if(!is_null($accessLName)){
            if($accessLName->code === $accessLevel){
                return true;
            }
        }
        return false;
    }

    public static function filterByAdmin($model){
        if(self::isSystemAdmin()){
            return $model->newQuery()->orderByDesc('id');
        }
         return $model->newQuery()->where('tenant_id',Auth::user()->tenant_id)->orderByDesc('id');

    }
}
