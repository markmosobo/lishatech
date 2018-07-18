<?php

namespace App\Repositories;

use App\Models\CommitteeMember;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommitteeMemberRepository
 * @package App\Repositories
 * @version December 2, 2017, 5:39 am UTC
 *
 * @method CommitteeMember findWithoutFail($id, $columns = ['*'])
 * @method CommitteeMember find($id, $columns = ['*'])
 * @method CommitteeMember first($columns = ['*'])
*/
class CommitteeMemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'committee_id',
        'masterfile_id',
        'role'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CommitteeMember::class;
    }
}
