<?php

namespace App\Repositories;

use App\Models\Property;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertyRepository
 * @package App\Repositories
 * @version April 1, 2019, 1:06 am EAT
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
        return Property::class;
    }
}
