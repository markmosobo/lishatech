<?php

namespace App\Repositories;

use App\Models\AboutUs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AboutUsRepository
 * @package App\Repositories
 * @version March 8, 2019, 10:47 am EAT
 *
 * @method AboutUs findWithoutFail($id, $columns = ['*'])
 * @method AboutUs find($id, $columns = ['*'])
 * @method AboutUs first($columns = ['*'])
*/
class AboutUsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'about_category',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AboutUs::class;
    }
}
