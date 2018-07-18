<?php

namespace App\Repositories;

use App\Models\Session;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SessionRepository
 * @package App\Repositories
 * @version December 2, 2017, 4:24 am UTC
 *
 * @method Session findWithoutFail($id, $columns = ['*'])
 * @method Session find($id, $columns = ['*'])
 * @method Session first($columns = ['*'])
*/
class SessionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'session_name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Session::class;
    }
}
