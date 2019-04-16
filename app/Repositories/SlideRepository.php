<?php

namespace App\Repositories;

use App\Models\Slide;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SlideRepository
 * @package App\Repositories
 * @version April 13, 2019, 1:51 pm EAT
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
        'commercial_properties_for_sale_image',
        'residential_properties_for sale_image',
        'commercial_properties_to rent_image',
        'residential_properties_to rent_image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Slide::class;
    }
}
