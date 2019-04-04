<?php

namespace App\Repositories;

use App\Models\PropertyFeature;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertyFeatureRepository
 * @package App\Repositories
 * @version April 1, 2019, 1:28 am EAT
 *
 * @method PropertyFeature findWithoutFail($id, $columns = ['*'])
 * @method PropertyFeature find($id, $columns = ['*'])
 * @method PropertyFeature first($columns = ['*'])
*/
class PropertyFeatureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_title_id',
        'type',
        'area',
        'building_age',
        'bedrooms',
        'bathrooms',
        'kitchen',
        'garage',
        'cooling',
        'heating',
        'sewer',
        'water',
        'other_features'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PropertyFeature::class;
    }
}
