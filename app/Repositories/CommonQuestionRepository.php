<?php

namespace App\Repositories;

use App\Models\CommonQuestion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommonQuestionRepository
 * @package App\Repositories
 * @version February 18, 2019, 4:29 pm EAT
 *
 * @method CommonQuestion findWithoutFail($id, $columns = ['*'])
 * @method CommonQuestion find($id, $columns = ['*'])
 * @method CommonQuestion first($columns = ['*'])
*/
class CommonQuestionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'answer'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CommonQuestion::class;
    }
}
