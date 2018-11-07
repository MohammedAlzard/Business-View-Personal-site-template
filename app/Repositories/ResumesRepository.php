<?php

namespace App\Repositories;

use App\Models\Resumes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ResumesRepository
 * @package App\Repositories
 * @version August 27, 2018, 7:05 pm UTC
 *
 * @method Resumes findWithoutFail($id, $columns = ['*'])
 * @method Resumes find($id, $columns = ['*'])
 * @method Resumes first($columns = ['*'])
*/
class ResumesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'datetime',
        'type',
        'title',
        'description',
        'orderBy'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Resumes::class;
    }
}
