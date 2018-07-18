<?php

namespace App\Models;

//use Eloquent as Model;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Route
 * @package App\Models
 * @version September 20, 2017, 4:03 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Menu
 * @property \Illuminate\Database\Eloquent\Collection RoleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUsers
 * @property string route_name
 * @property string url
 * @property boolean route_status
 * @property bigInteger parent_route
 */
class Route extends Model
{

    public $table = 'routes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'route_name',
        'url',
        'route_status',
        'parent_route',
        'icon',
        'sequence'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'route_name' => 'string',
        'url' => 'string',
        'route_status' => 'boolean',
        'icon'=>'string',
        'sequence'=>'integer'
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
    public function menus()
    {
        return $this->hasMany(\App\Models\Menu::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function roleRoutes()
    {
        return $this->hasMany(\App\Models\RoleRoute::class);
    }

    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }
}
