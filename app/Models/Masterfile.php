<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Masterfile
 * @package App\Models
 * @version April 24, 2018, 8:53 am UTC
 *
 * @property \App\Models\Tenant tenant
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property string full_name
 * @property string national_id
 * @property string gender
 * @property string phone_number
 * @property string email
 * @property integer created_by
 * @property integer tenant_id
 */
class Masterfile extends Model
{
    use SoftDeletes;

    public $table = 'masterfiles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'full_name',
        'national_id',
        'gender',
        'phone_number',
        'email',
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
        'full_name' => 'string',
        'national_id' => 'string',
        'gender' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'created_by' => 'integer',
        'tenant_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'full_name' => 'required',
        'national_id' => 'required|digits:8',
        'gender' => 'required',
        'phone_number' => 'required|digits:10',
        'email' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tenant()
    {
        return $this->belongsTo(\App\Models\Tenant::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
