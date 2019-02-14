<?php

namespace App\Repositories;

use App\Models\SermonCategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SermonCategoryRepository
 * @package App\Repositories
 * @version February 14, 2019, 7:46 am EAT
 *
 * @method SermonCategory findWithoutFail($id, $columns = ['*'])
 * @method SermonCategory find($id, $columns = ['*'])
 * @method SermonCategory first($columns = ['*'])
*/
class SermonCategoryRepository extends BaseRepository
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
        return SermonCategory::class;
    }
}
