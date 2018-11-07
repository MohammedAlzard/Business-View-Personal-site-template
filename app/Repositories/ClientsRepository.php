<?php

namespace App\Repositories;

use App\Models\Clients;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClientsRepository
 * @package App\Repositories
 * @version August 27, 2018, 5:32 pm UTC
 *
 * @method Clients findWithoutFail($id, $columns = ['*'])
 * @method Clients find($id, $columns = ['*'])
 * @method Clients first($columns = ['*'])
*/
class ClientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'title',
        'link',
        'orderBy'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clients::class;
    }
}
