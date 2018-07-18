<?php

namespace App\Repositories;

use App\Models\Document;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocumentRepository
 * @package App\Repositories
 * @version December 3, 2017, 4:19 pm UTC
 *
 * @method Document findWithoutFail($id, $columns = ['*'])
 * @method Document find($id, $columns = ['*'])
 * @method Document first($columns = ['*'])
*/
class DocumentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'session_id',
        'document_category',
        'user_group',
        'document_path',
        'upload_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Document::class;
    }
}
