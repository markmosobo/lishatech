<?php

namespace App\Repositories;

use App\Models\PropertyforSaleFeature;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropertyforSaleFeatureRepository
 * @package App\Repositories
 * @version April 7, 2019, 5:00 am EAT
 *
 * @method PropertyforSaleFeature findWithoutFail($id, $columns = ['*'])
 * @method PropertyforSaleFeature find($id, $columns = ['*'])
 * @method PropertyforSaleFeature first($columns = ['*'])
*/
class PropertyforSaleFeatureRepository extends BaseRepository
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
        return PropertyforSaleFeature::class;
    }
}
