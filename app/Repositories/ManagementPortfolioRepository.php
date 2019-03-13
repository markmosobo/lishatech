<?php

namespace App\Repositories;

use App\Models\ManagementPortfolio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ManagementPortfolioRepository
 * @package App\Repositories
 * @version March 13, 2019, 3:12 pm EAT
 *
 * @method ManagementPortfolio findWithoutFail($id, $columns = ['*'])
 * @method ManagementPortfolio find($id, $columns = ['*'])
 * @method ManagementPortfolio first($columns = ['*'])
*/
class ManagementPortfolioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_title',
        'image_path',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ManagementPortfolio::class;
    }
}
