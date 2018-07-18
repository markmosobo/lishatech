<?php

namespace App\Repositories;

use App\Models\InfoBip;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InfoBipRepository
 * @package App\Repositories
 * @version July 3, 2018, 2:25 pm EAT
 *
 * @method InfoBip findWithoutFail($id, $columns = ['*'])
 * @method InfoBip find($id, $columns = ['*'])
 * @method InfoBip first($columns = ['*'])
*/
class InfoBipRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tenant_id',
        'username',
        'alphanumeric',
        'password',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InfoBip::class;
    }
}
