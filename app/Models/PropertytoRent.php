<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PropertytoRent
 * @package App\Models
 * @version April 2, 2019, 6:00 pm EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string property_title
 * @property string status
 * @property string address
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
        'property_title',
        'status',
        'address',
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
        'property_title' => 'string',
        'status' => 'string',
        'address' => 'string',
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
