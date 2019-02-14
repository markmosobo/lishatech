<?php

namespace App\Repositories;

use App\Models\churchGroupMember;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class churchGroupMemberRepository
 * @package App\Repositories
 * @version February 14, 2019, 9:54 am EAT
 *
 * @method churchGroupMember findWithoutFail($id, $columns = ['*'])
 * @method churchGroupMember find($id, $columns = ['*'])
 * @method churchGroupMember first($columns = ['*'])
*/
class churchGroupMemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'member_id',
        'church_group_id',
        'role'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return churchGroupMember::class;
    }
}
