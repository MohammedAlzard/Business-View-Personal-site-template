<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Resumes
 * @package App\Models
 * @version August 27, 2018, 7:05 pm UTC
 *
 * @property string datetime
 * @property string type
 * @property string title
 * @property string description
 * @property integer orderBy
 */
class Resumes extends Model
{
    use SoftDeletes;

    public $table = 'resumes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'datetime',
        'type',
        'title',
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
        'datetime' => 'string',
        'type' => 'string',
        'title' => 'string',
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
