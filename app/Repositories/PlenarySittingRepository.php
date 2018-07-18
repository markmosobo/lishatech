<?php

namespace App\Repositories;

use App\Models\PlenarySitting;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlenarySittingRepository
 * @package App\Repositories
 * @version December 10, 2017, 9:50 am UTC
 *
 * @method PlenarySitting findWithoutFail($id, $columns = ['*'])
 * @method PlenarySitting find($id, $columns = ['*'])
 * @method PlenarySitting first($columns = ['*'])
*/
class PlenarySittingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sitting_name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlenarySitting::class;
    }
}
