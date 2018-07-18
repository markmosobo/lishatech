<?php

namespace App\Repositories;

use App\Models\UserIndividualMessageRepository;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserIndividualMessageRepositoryRepository
 * @package App\Repositories
 * @version December 5, 2017, 11:08 am UTC
 *
 * @method UserIndividualMessageRepository findWithoutFail($id, $columns = ['*'])
 * @method UserIndividualMessageRepository find($id, $columns = ['*'])
 * @method UserIndividualMessageRepository first($columns = ['*'])
*/
class UserIndividualMessageRepositoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'masterfile_id',
        'document_id',
        'broadcast_id',
        'broadcast_type',
        'sent',
        'received'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserIndividualMessageRepository::class;
    }
}
