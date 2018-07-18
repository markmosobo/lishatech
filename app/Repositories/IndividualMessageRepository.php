<?php

namespace App\Repositories;

use App\Models\IndividualMessage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class IndividualMessageRepository
 * @package App\Repositories
 * @version December 4, 2017, 8:40 pm UTC
 *
 * @method IndividualMessage findWithoutFail($id, $columns = ['*'])
 * @method IndividualMessage find($id, $columns = ['*'])
 * @method IndividualMessage first($columns = ['*'])
*/
class IndividualMessageRepository extends BaseRepository
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
        return IndividualMessage::class;
    }
}
