<?php

namespace App\Repositories;

use App\Models\Slide;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SlideRepository
 * @package App\Repositories
 * @version July 21, 2018, 8:40 pm EAT
 *
 * @method Slide findWithoutFail($id, $columns = ['*'])
 * @method Slide find($id, $columns = ['*'])
 * @method Slide first($columns = ['*'])
*/
class SlideRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'sequence',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Slide::class;
    }
}
