<?php

namespace App\Repositories;

use App\Models\DocumentCategory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocumentCategoryRepository
 * @package App\Repositories
 * @version November 30, 2017, 11:41 am UTC
 *
 * @method DocumentCategory findWithoutFail($id, $columns = ['*'])
 * @method DocumentCategory find($id, $columns = ['*'])
 * @method DocumentCategory first($columns = ['*'])
*/
class DocumentCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DocumentCategory::class;
    }
}
