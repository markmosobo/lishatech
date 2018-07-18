<?php

namespace App\Repositories;

use App\Models\Committee;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommitteeRepository
 * @package App\Repositories
 * @version November 30, 2017, 9:05 am UTC
 *
 * @method Committee findWithoutFail($id, $columns = ['*'])
 * @method Committee find($id, $columns = ['*'])
 * @method Committee first($columns = ['*'])
*/
class CommitteeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'created_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Committee::class;
    }
}
