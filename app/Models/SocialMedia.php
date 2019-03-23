<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SocialMedia
 * @package App\Models
 * @version March 23, 2019, 10:17 am EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string facebook
 * @property string twitter
 * @property string googleplus
 * @property string linkedin
 */
class SocialMedia extends Model
{
    use SoftDeletes;

    public $table = 'social_media';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'facebook',
        'twitter',
        'googleplus',
        'linkedin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'facebook' => 'string',
        'twitter' => 'string',
        'googleplus' => 'string',
        'linkedin' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
