<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blog
 * @package App\Models
 * @version February 14, 2019, 9:58 am EAT
 *
 * @property \App\Models\BlogCategory blogCategory
 * @property \Illuminate\Database\Eloquent\Collection churchGroupMembers
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property string author
 * @property string|\Carbon\Carbon blog_date
 * @property string title
 * @property integer blog_category_id
 * @property string image_path
 * @property string body
 */
class Blog extends Model
{
    use SoftDeletes;

    public $table = 'blogs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'author',
        'blog_date',
        'title',
        'blog_category_id',
        'image_path',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author' => 'string',
        'title' => 'string',
        'blog_category_id' => 'integer',
        'image_path' => 'string',
        'body' => 'string'
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
    public function blogCategory()
    {
        return $this->belongsTo(\App\Models\BlogCategory::class);
    }
}
