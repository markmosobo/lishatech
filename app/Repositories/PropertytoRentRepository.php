<?php

namespace App\Repositories;

use App\Models\PropertytoRent;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertytoRentRepository
 * @package App\Repositories
 * @version March 14, 2019, 10:47 am EAT
 *
 * @method PropertytoRent findWithoutFail($id, $columns = ['*'])
 * @method PropertytoRent find($id, $columns = ['*'])
 * @method PropertytoRent first($columns = ['*'])
*/
class PropertytoRentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_name',
        'address',
        'status',
        'rent',
        'image_path',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PropertytoRent::class;
    }
}
