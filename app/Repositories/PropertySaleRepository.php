<?php

namespace App\Repositories;

use App\Models\PropertySale;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertySaleRepository
 * @package App\Repositories
 * @version April 2, 2019, 3:35 pm EAT
 *
 * @method PropertySale findWithoutFail($id, $columns = ['*'])
 * @method PropertySale find($id, $columns = ['*'])
 * @method PropertySale first($columns = ['*'])
*/
class PropertySaleRepository extends BaseRepository
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
        return PropertySale::class;
    }
}
