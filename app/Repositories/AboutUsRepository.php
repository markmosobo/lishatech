<?php

namespace App\Repositories;

use App\Models\AboutUs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AboutUsRepository
 * @package App\Repositories
 * @version March 23, 2019, 10:25 am EAT
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
        'description',
        'vision',
        'mission'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AboutUs::class;
    }
}
