<?php

namespace App\Repositories;

use App\Models\PropertytoRent;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertytoRentRepository
 * @package App\Repositories
 * @version April 16, 2019, 7:29 am EAT
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
        'property_title',
        'status',
        'address',
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
