<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PropertytoRent
 * @package App\Models
 * @version March 14, 2019, 10:47 am EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string property_name
 * @property string address
 * @property string status
 * @property bigInteger rent
 * @property string image_path
 * @property string description
 */
class PropertytoRent extends Model
{
    use SoftDeletes;

    public $table = 'properties_to_rent';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'property_name',
        'address',
        'status',
        'rent',
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
        'property_name' => 'string',
        'address' => 'string',
        'status' => 'string',
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

    
}
