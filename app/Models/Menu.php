<?php

namespace App\Models;

//use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * @package App\Models
 * @version September 20, 2017, 4:35 pm UTC
 *
 * @property \App\Models\Route route
 * @property \Illuminate\Database\Eloquent\Collection roleRoutes
 * @property \Illuminate\Database\Eloquent\Collection roleUsers
 * @property string menu_name
 * @property integer parent_menu
 * @property integer route_id
 * @property integer sequence
 * @property boolean menu_status
 */
class Menu extends Model
{

    public $table = 'menus';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'menu_name',
        'parent_menu',
        'route_id',
        'sequence',
        'menu_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'menu_name' => 'string',
        'parent_menu' => 'integer',
        'route_id' => 'integer',
        'sequence' => 'integer',
        'menu_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        "menu_name"=>'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function route()
    {
        return $this->belongsTo(\App\Models\Route::class);
    }
}
