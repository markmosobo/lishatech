<?php

namespace App\Repositories;

use App\Models\Sermon;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SermonRepository
 * @package App\Repositories
 * @version February 14, 2019, 9:51 am EAT
 *
 * @method Sermon findWithoutFail($id, $columns = ['*'])
 * @method Sermon find($id, $columns = ['*'])
 * @method Sermon first($columns = ['*'])
*/
class SermonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'sermon_date',
        'member_id',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sermon::class;
    }
}
