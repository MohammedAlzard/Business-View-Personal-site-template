<?php

namespace App\Repositories;

use App\Models\Testimonials;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TestimonialsRepository
 * @package App\Repositories
 * @version August 27, 2018, 6:00 pm UTC
 *
 * @method Testimonials findWithoutFail($id, $columns = ['*'])
 * @method Testimonials find($id, $columns = ['*'])
 * @method Testimonials first($columns = ['*'])
*/
class TestimonialsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'author',
        'firm',
        'image',
        'description',
        'orderBy'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Testimonials::class;
    }
}
