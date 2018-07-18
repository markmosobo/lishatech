<?php

namespace App\Repositories;

use App\Models\Audit;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AuditRepository
 * @package App\Repositories
 * @version November 28, 2017, 10:34 am UTC
 *
 * @method Audit findWithoutFail($id, $columns = ['*'])
 * @method Audit find($id, $columns = ['*'])
 * @method Audit first($columns = ['*'])
*/
class AuditRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'event',
        'auditable_id',
        'auditable_type',
        'old_values',
        'new_values',
        'url',
        'ip_address',
        'user_agent'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Audit::class;
    }
}
