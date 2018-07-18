<?php

namespace App\Repositories;

use App\Models\Tenant;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TenantRepository
 * @package App\Repositories
 * @version April 21, 2018, 9:08 am UTC
 *
 * @method Tenant findWithoutFail($id, $columns = ['*'])
 * @method Tenant find($id, $columns = ['*'])
 * @method Tenant first($columns = ['*'])
*/
class TenantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone_number',
        'location'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tenant::class;
    }
}
