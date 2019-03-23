<?php

namespace App\Repositories;

use App\Models\SocialMedia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SocialMediaRepository
 * @package App\Repositories
 * @version March 23, 2019, 10:17 am EAT
 *
 * @method SocialMedia findWithoutFail($id, $columns = ['*'])
 * @method SocialMedia find($id, $columns = ['*'])
 * @method SocialMedia first($columns = ['*'])
*/
class SocialMediaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'facebook',
        'twitter',
        'googleplus',
        'linkedin'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SocialMedia::class;
    }
}
