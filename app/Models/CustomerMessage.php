<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CustomerMessage
 * @package App\Models
 * @version May 14, 2018, 1:02 pm EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection accountTransactions
 * @property \Illuminate\Database\Eloquent\Collection loanProducts
 * @property \Illuminate\Database\Eloquent\Collection repaymentSchedules
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string phone_number
 * @property string name
 * @property integer user_id
 * @property string message
 * @property boolean sent
 * @property string|\Carbon\Carbon execution_time
 * @property integer tenant_id
 */
class CustomerMessage extends Model
{
    use SoftDeletes;

    public $table = 'customer_messages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'phone_number',
        'name',
        'user_id',
        'message',
        'sent',
        'execution_time',
        'tenant_id',
        'message_type',
        'loan_id',
        'schedule_id',
        'days',
        'message_id',
        'smsCount',
        'status',
        'delivery_checked',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'phone_number' => 'string',
        'name' => 'string',
        'user_id' => 'integer',
        'message' => 'string',
        'sent' => 'boolean',
        'tenant_id' => 'integer',
        'loan_id' => 'integer',
        'schedule_id' => 'integer',
        'message_type' => 'string',
        'days' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
