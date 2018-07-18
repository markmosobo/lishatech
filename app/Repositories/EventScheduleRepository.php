<?php

namespace App\Repositories;

use App\Models\EventSchedule;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EventScheduleRepository
 * @package App\Repositories
 * @version July 18, 2018, 2:35 pm EAT
 *
 * @method EventSchedule findWithoutFail($id, $columns = ['*'])
 * @method EventSchedule find($id, $columns = ['*'])
 * @method EventSchedule first($columns = ['*'])
*/
class EventScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'event_id',
        'start_at',
        'ends_at',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EventSchedule::class;
    }
}
