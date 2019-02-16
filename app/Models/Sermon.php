<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sermon
 * @package App\Models
 * @version February 17, 2019, 1:15 am EAT
 *
 * @property \App\Models\Member member
 * @property \Illuminate\Database\Eloquent\Collection churchGroupMembers
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string title
 * @property string|\Carbon\Carbon sermon_date
 * @property integer member_id
 * @property string description
 * @property string body
 */
class Sermon extends Model
{
    use SoftDeletes;

    public $table = 'sermons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'sermon_date',
        'member_id',
        'description',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'member_id' => 'integer',
        'description' => 'string',
        'body' => 'string'
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
    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class);
    }
}
