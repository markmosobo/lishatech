<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Role
 * @package App\Models
 * @version April 7, 2018, 2:51 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection RoleUser
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property string name
 * @property string code
 */
class Role extends Model
{

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'code',
        'access_level_id',
        'created_by',
        'tenant_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'access_level_id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'created_by' => 'integer',
        'tenant_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function routes()
    {
        return $this->belongsToMany(\App\Models\Route::class, 'role_route');
    }
    public function accessLevel()
    {
        return $this->belongsTo(\App\Models\AccessLevel::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function roleUsers()
    {
        return $this->hasMany(\App\Models\RoleUser::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
