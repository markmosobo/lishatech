<?php

namespace App\Repositories;

use App\Models\SermonSpeaker;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SermonSpeakerRepository
 * @package App\Repositories
 * @version February 14, 2019, 7:47 am EAT
 *
 * @method SermonSpeaker findWithoutFail($id, $columns = ['*'])
 * @method SermonSpeaker find($id, $columns = ['*'])
 * @method SermonSpeaker first($columns = ['*'])
*/
class SermonSpeakerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'position_id',
        'bible_verses'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SermonSpeaker::class;
    }
}
