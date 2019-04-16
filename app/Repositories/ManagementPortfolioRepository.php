<?php

namespace App\Repositories;

use App\Models\ManagementPortfolio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ManagementPortfolioRepository
 * @package App\Repositories
 * @version April 16, 2019, 7:41 am EAT
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
        'property_title_id',
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
