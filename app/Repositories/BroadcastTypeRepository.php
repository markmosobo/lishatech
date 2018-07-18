<?php

namespace App\Repositories;

use App\Models\BroadcastType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BroadcastTypeRepository
 * @package App\Repositories
 * @version December 3, 2017, 4:44 pm UTC
 *
 * @method BroadcastType findWithoutFail($id, $columns = ['*'])
 * @method BroadcastType find($id, $columns = ['*'])
 * @method BroadcastType first($columns = ['*'])
*/
class BroadcastTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'message'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BroadcastType::class;
    }
}
