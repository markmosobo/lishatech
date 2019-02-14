<?php

namespace App\Repositories;

use App\Models\churchGroup;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class churchGroupRepository
 * @package App\Repositories
 * @version February 14, 2019, 9:52 am EAT
 *
 * @method churchGroup findWithoutFail($id, $columns = ['*'])
 * @method churchGroup find($id, $columns = ['*'])
 * @method churchGroup first($columns = ['*'])
*/
class churchGroupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'status',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return churchGroup::class;
    }
}
