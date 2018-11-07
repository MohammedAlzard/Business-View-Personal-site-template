<?php

namespace App\Repositories;

use App\Models\SocialMedia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SocialMediaRepository
 * @package App\Repositories
 * @version August 26, 2018, 10:26 pm UTC
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
        'icon',
        'link'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SocialMedia::class;
    }
}
