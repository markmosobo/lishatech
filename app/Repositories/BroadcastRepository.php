<?php

namespace App\Repositories;

use App\Models\Broadcast;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BroadcastRepository
 * @package App\Repositories
 * @version December 3, 2017, 4:13 pm UTC
 *
 * @method Broadcast findWithoutFail($id, $columns = ['*'])
 * @method Broadcast find($id, $columns = ['*'])
 * @method Broadcast first($columns = ['*'])
*/
class BroadcastRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_group',
        'message',
        'broadcast_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Broadcast::class;
    }
}
