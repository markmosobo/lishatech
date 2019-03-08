<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blog
 * @package App\Models
 * @version March 8, 2019, 4:05 pm EAT
 *
 * @property \App\Models\BlogCategory blogCategory
 * @property \Illuminate\Database\Eloquent\Collection churchGroupMembers
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property integer blog_category_id
 * @property date date
 * @property string author
 * @property string blog_title
 * @property string media_path
 * @property string blog_body
 */
class Blog extends Model
{
    use SoftDeletes;

    public $table = 'blogs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'blog_category_id',
        'date',
        'author',
        'blog_title',
        'media_path',
        'blog_body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'blog_category_id' => 'integer',
        'date' => 'date',
        'author' => 'string',
        'blog_title' => 'string',
        'media_path' => 'string',
        'blog_body' => 'string'
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
