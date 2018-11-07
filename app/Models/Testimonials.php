<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Testimonials
 * @package App\Models
 * @version August 27, 2018, 6:00 pm UTC
 *
 * @property string author
 * @property string firm
 * @property string image
 * @property string description
 * @property integer orderBy
 */
class Testimonials extends Model
{
    use SoftDeletes;

    public $table = 'testimonials';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'author',
        'firm',
        'image',
        'description',
        'orderBy'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author' => 'string',
        'firm' => 'string',
        'image' => 'string',
        'description' => 'string',
        'orderBy' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
