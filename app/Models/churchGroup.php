<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class churchGroup
 * @package App\Models
 * @version February 14, 2019, 9:52 am EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection ChurchGroupMember
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string name
 * @property boolean status
 * @property string description
 */
class churchGroup extends Model
{
    use SoftDeletes;

    public $table = 'church_groups';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'status',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'status' => 'boolean',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function churchGroupMembers()
    {
        return $this->hasMany(\App\Models\ChurchGroupMember::class);
    }
}
