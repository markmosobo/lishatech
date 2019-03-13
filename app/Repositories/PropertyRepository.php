<?php

namespace App\Repositories;

use App\Models\Property;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertyRepository
 * @package App\Repositories
 * @version March 13, 2019, 2:46 pm EAT
 *
 * @method Property findWithoutFail($id, $columns = ['*'])
 * @method Property find($id, $columns = ['*'])
 * @method Property first($columns = ['*'])
*/
class PropertyRepository extends BaseRepository
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
        return Property::class;
    }
}
