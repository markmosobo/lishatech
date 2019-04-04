<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PropertyforRent
 * @package App\Models
 * @version April 2, 2019, 3:52 pm EAT
 *
 * @property \App\Models\Property property
 * @property \App\Models\Property property
 * @property \App\Models\Property property
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property integer property_title_id
 * @property integer price_id
 * @property integer address_id
 */
class PropertyforRent extends Model
{
    use SoftDeletes;

    public $table = 'properties_for_rent';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'property_title_id',
        'price_id',
        'address_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'property_title_id' => 'integer',
        'price_id' => 'integer',
        'address_id' => 'integer'
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

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     **/
//    public function property()
//    {
//        return $this->belongsTo(\App\Models\Property::class);
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     **/
//    public function property()
//    {
//        return $this->belongsTo(\App\Models\Property::class);
//    }
}
