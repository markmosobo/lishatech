<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PropertyforSaleFeature
 * @package App\Models
 * @version April 7, 2019, 5:00 am EAT
 *
 * @property \App\Models\Property property
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property integer property_title_id
 * @property string type
 * @property bigInteger area
 * @property string building_age
 * @property integer bedrooms
 * @property integer bathrooms
 * @property integer kitchen
 * @property integer garage
 * @property string cooling
 * @property string heating
 * @property string sewer
 * @property string water
 * @property string other_features
 */
class PropertyforSaleFeature extends Model
{
    use SoftDeletes;

    public $table = 'properties_for_sale_features';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'property_title_id',
        'type',
        'area',
        'building_age',
        'bedrooms',
        'bathrooms',
        'kitchen',
        'garage',
        'cooling',
        'heating',
        'sewer',
        'water',
        'other_features'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'property_title_id' => 'integer',
        'type' => 'string',
        'building_age' => 'string',
        'bedrooms' => 'integer',
        'bathrooms' => 'integer',
        'kitchen' => 'integer',
        'garage' => 'integer',
        'cooling' => 'string',
        'heating' => 'string',
        'sewer' => 'string',
        'water' => 'string',
        'other_features' => 'string'
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
    public function property()
    {
        return $this->belongsTo(\App\Models\Property::class);
    }
}
