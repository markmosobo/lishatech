<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slide
 * @package App\Models
 * @version April 13, 2019, 1:51 pm EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string commercial_properties_for_sale_image
 * @property string residential_properties_for sale_image
 * @property string commercial_properties_to rent_image
 * @property string residential_properties_to rent_image
 */
class Slide extends Model
{
    use SoftDeletes;

    public $table = 'slides';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'commercial_properties_for_sale_image',
        'residential_properties_for sale_image',
        'commercial_properties_to rent_image',
        'residential_properties_to rent_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'commercial_properties_for_sale_image' => 'string',
        'residential_properties_for sale_image' => 'string',
        'commercial_properties_to rent_image' => 'string',
        'residential_properties_to rent_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
