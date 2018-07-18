<?php

namespace App\Repositories;

use App\Models\AccessLevel;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AccessLevelRepository
 * @package App\Repositories
 * @version April 21, 2018, 9:28 am UTC
 *
 * @method AccessLevel findWithoutFail($id, $columns = ['*'])
 * @method AccessLevel find($id, $columns = ['*'])
 * @method AccessLevel first($columns = ['*'])
*/
class AccessLevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AccessLevel::class;
    }
}
