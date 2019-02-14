<?php

namespace App\Repositories;

use App\Models\blogCategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class blogCategoryRepository
 * @package App\Repositories
 * @version February 14, 2019, 9:57 am EAT
 *
 * @method blogCategory findWithoutFail($id, $columns = ['*'])
 * @method blogCategory find($id, $columns = ['*'])
 * @method blogCategory first($columns = ['*'])
*/
class blogCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'status',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return blogCategory::class;
    }
}
