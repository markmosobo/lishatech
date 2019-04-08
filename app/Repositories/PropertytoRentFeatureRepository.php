<?php

namespace App\Repositories;

use App\Models\PropertytoRentFeature;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertytoRentFeatureRepository
 * @package App\Repositories
 * @version April 7, 2019, 5:06 am EAT
 *
 * @method PropertytoRentFeature findWithoutFail($id, $columns = ['*'])
 * @method PropertytoRentFeature find($id, $columns = ['*'])
 * @method PropertytoRentFeature first($columns = ['*'])
*/
class PropertytoRentFeatureRepository extends BaseRepository
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
        return PropertytoRentFeature::class;
    }
}
