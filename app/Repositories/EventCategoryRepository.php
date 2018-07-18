<?php

namespace App\Repositories;

use App\Models\EventCategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EventCategoryRepository
 * @package App\Repositories
 * @version July 18, 2018, 5:27 pm EAT
 *
 * @method EventCategory findWithoutFail($id, $columns = ['*'])
 * @method EventCategory find($id, $columns = ['*'])
 * @method EventCategory first($columns = ['*'])
*/
class EventCategoryRepository extends BaseRepository
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
        return EventCategory::class;
    }
}
