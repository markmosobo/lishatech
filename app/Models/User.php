<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
/**
 * Class User
 * @package App\Models
 * @version April 8, 2018, 11:18 am UTC
 *
 * @property \App\Models\Role role
 * @property \App\Models\Ward ward
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection RoleUser
 * @property string name
 * @property string email
 * @property string password
 * @property integer role_id
 * @property integer ward_id
 * @property boolean password_changed
 * @property boolean email_confirmed
 * @property boolean account_status
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;
    use Notifiable;
    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'password_changed',
        'email_confirmed',
        'account_status',
        'remember_token',
        'mf_id',
        'tenant_id',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'role_id' => 'integer',
        'mf_id' => 'integer',
        'created_by' => 'integer',
        'tenant_id' => 'integer',
        'password_changed' => 'boolean',
        'email_confirmed' => 'boolean',
        'account_status' => 'boolean',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email'=>'required|unique:users,email',
        'role_id'=>'required',

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/

}
