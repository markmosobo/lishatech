<?php

namespace App\Repositories;

use App\Models\PropertyforSale;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertyforSaleRepository
 * @package App\Repositories
 * @version March 14, 2019, 10:41 am EAT
 *
 * @method PropertyforSale findWithoutFail($id, $columns = ['*'])
 * @method PropertyforSale find($id, $columns = ['*'])
 * @method PropertyforSale first($columns = ['*'])
*/
class PropertyforSaleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_name',
        'address',
        'status',
        'price',
        'image_path',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PropertyforSale::class;
    }
}
