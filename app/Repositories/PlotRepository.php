<?php

namespace App\Repositories;

use App\Models\Plot;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlotRepository
 * @package App\Repositories
 * @version April 4, 2019, 2:39 pm EAT
 *
 * @method Plot findWithoutFail($id, $columns = ['*'])
 * @method Plot find($id, $columns = ['*'])
 * @method Plot first($columns = ['*'])
*/
class PlotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'plot_title',
        'location',
        'price',
        'image_path',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Plot::class;
    }
}
