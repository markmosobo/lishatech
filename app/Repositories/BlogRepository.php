<?php

namespace App\Repositories;

use App\Models\Blog;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BlogRepository
 * @package App\Repositories
 * @version March 8, 2019, 4:05 pm EAT
 *
 * @method Blog findWithoutFail($id, $columns = ['*'])
 * @method Blog find($id, $columns = ['*'])
 * @method Blog first($columns = ['*'])
*/
class BlogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'blog_category_id',
        'date',
        'author',
        'blog_title',
        'media_path',
        'blog_body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Blog::class;
    }
}
