<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InfoBip
 * @package App\Models
 * @version July 3, 2018, 2:25 pm EAT
 *
 * @property \App\Models\Tenant tenant
 * @property \Illuminate\Database\Eloquent\Collection accountTransactions
 * @property \Illuminate\Database\Eloquent\Collection repaymentSchedules
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property bigInteger tenant_id
 * @property string username
 * @property string alphanumeric
 * @property string password
 * @property boolean status
 */
class InfoBip extends Model
{
    use SoftDeletes;

    public $table = 'infobip';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tenant_id',
        'username',
        'alphanumeric',
        'password',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'username' => 'string',
        'alphanumeric' => 'string',
        'password' => 'string',
        'status' => 'boolean'
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
    public function tenant()
    {
        return $this->belongsTo(\App\Models\Tenant::class);
    }
}
