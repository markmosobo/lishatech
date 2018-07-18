<?php

namespace App\Repositories;

use App\Models\CommitteeDocument;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommitteeDocumentRepository
 * @package App\Repositories
 * @version January 22, 2018, 6:52 am UTC
 *
 * @method CommitteeDocument findWithoutFail($id, $columns = ['*'])
 * @method CommitteeDocument find($id, $columns = ['*'])
 * @method CommitteeDocument first($columns = ['*'])
*/
class CommitteeDocumentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'session_id',
        'committee_doc_category',
        'committee',
        'document_path',
        'upload_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CommitteeDocument::class;
    }
}
