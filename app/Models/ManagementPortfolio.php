<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ManagementPortfolio
 * @package App\Models
 * @version April 16, 2019, 7:41 am EAT
 *
 * @property \App\Models\PropertiesToRent propertiesToRent
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property integer property_title_id
 * @property string image_path
 * @property string description
 */
class ManagementPortfolio extends Model
{
    use SoftDeletes;

    public $table = 'management_portfolio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'property_title_id',
        'image_path',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'property_title_id' => 'integer',
        'image_path' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function propertiesToRent()
    {
        return $this->belongsTo(\App\Models\PropertiesToRent::class);
    }
}
