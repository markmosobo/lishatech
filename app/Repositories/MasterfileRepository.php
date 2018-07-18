<?php

namespace App\Repositories;

use App\Models\Masterfile;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MasterfileRepository
 * @package App\Repositories
 * @version April 24, 2018, 8:53 am UTC
 *
 * @method Masterfile findWithoutFail($id, $columns = ['*'])
 * @method Masterfile find($id, $columns = ['*'])
 * @method Masterfile first($columns = ['*'])
*/
class MasterfileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'national_id',
        'gender',
        'phone_number',
        'email',
        'created_by',
        'tenant_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Masterfile::class;
    }
}
