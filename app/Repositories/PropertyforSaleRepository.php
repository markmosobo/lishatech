<?php

namespace App\Repositories;

use App\Models\PropertyforSale;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertyforSaleRepository
 * @package App\Repositories
 * @version April 15, 2019, 1:05 pm EAT
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
        'amount',
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
