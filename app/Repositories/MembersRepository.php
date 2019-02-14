<?php

namespace App\Repositories;

use App\Models\Members;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MembersRepository
 * @package App\Repositories
 * @version February 14, 2019, 9:49 am EAT
 *
 * @method Members findWithoutFail($id, $columns = ['*'])
 * @method Members find($id, $columns = ['*'])
 * @method Members first($columns = ['*'])
*/
class MembersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'phone_number',
        'image_path',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Members::class;
    }
}
