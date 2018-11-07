<?php

namespace App\Repositories;

use App\Models\Skills;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SkillsRepository
 * @package App\Repositories
 * @version August 27, 2018, 7:48 pm UTC
 *
 * @method Skills findWithoutFail($id, $columns = ['*'])
 * @method Skills find($id, $columns = ['*'])
 * @method Skills first($columns = ['*'])
*/
class SkillsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'title',
        'orderBy'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Skills::class;
    }
}
