<?php

namespace App\Repositories;

use App\Models\PropertyforRent;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertyforRentRepository
 * @package App\Repositories
 * @version April 2, 2019, 3:52 pm EAT
 *
 * @method PropertyforRent findWithoutFail($id, $columns = ['*'])
 * @method PropertyforRent find($id, $columns = ['*'])
 * @method PropertyforRent first($columns = ['*'])
*/
class PropertyforRentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_title_id',
        'price_id',
        'address_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PropertyforRent::class;
    }
}
