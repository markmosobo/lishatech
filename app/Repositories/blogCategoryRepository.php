<?php

namespace App\Repositories;

use App\Models\blogCategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class blogCategoryRepository
 * @package App\Repositories
 * @version March 8, 2019, 3:46 pm EAT
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
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return blogCategory::class;
    }
}
