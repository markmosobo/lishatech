<?php

namespace App\Repositories;

use App\Models\CustomerMessage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CustomerMessageRepository
 * @package App\Repositories
 * @version May 14, 2018, 1:02 pm EAT
 *
 * @method CustomerMessage findWithoutFail($id, $columns = ['*'])
 * @method CustomerMessage find($id, $columns = ['*'])
 * @method CustomerMessage first($columns = ['*'])
*/
class CustomerMessageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'phone_number',
        'name',
        'user_id',
        'message',
        'sent',
        'execution_time',
        'tenant_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CustomerMessage::class;
    }
}
