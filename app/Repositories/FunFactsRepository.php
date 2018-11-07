<?php

namespace App\Repositories;

use App\Models\FunFacts;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FunFactsRepository
 * @package App\Repositories
 * @version August 27, 2018, 6:28 pm UTC
 *
 * @method FunFacts findWithoutFail($id, $columns = ['*'])
 * @method FunFacts find($id, $columns = ['*'])
 * @method FunFacts first($columns = ['*'])
*/
class FunFactsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'icon',
        'title',
        'number',
        'orderBy'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FunFacts::class;
    }
}
