<?php

namespace App\Models;

//use Eloquent as Model;

use Illuminate\Database\Eloquent\Model;
/**
 * Class RoleRoute
 * @package App\Models
 * @version September 22, 2017, 9:56 am UTC
 *
 * @property \App\Models\Role role
 * @property \App\Models\Route route
 * @property \Illuminate\Database\Eloquent\Collection menus
 * @property \Illuminate\Database\Eloquent\Collection roleUsers
 * @property integer role_id
 * @property integer route_id
 */
class RoleRoute extends Model
{

    public $table = 'role_route';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'role_id',
        'route_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role_id' => 'integer',
        'route_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function route()
    {
        return $this->belongsTo(\App\Models\Route::class);
    }
}
