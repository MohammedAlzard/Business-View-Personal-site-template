<?php

namespace App\Repositories;

use App\Models\Services;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServicesRepository
 * @package App\Repositories
 * @version August 27, 2018, 5:03 pm UTC
 *
 * @method Services findWithoutFail($id, $columns = ['*'])
 * @method Services find($id, $columns = ['*'])
 * @method Services first($columns = ['*'])
*/
class ServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'title',
        'description',
        'orderBy'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Services::class;
    }
}
