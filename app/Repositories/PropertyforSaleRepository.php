<?php

namespace App\Repositories;

use App\Models\PropertyforSale;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertyforSaleRepository
 * @package App\Repositories
 * @version April 2, 2019, 5:50 pm EAT
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
        'property_title',
        'status',
        'address',
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
