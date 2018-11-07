<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FunFacts
 * @package App\Models
 * @version August 27, 2018, 6:28 pm UTC
 *
 * @property string icon
 * @property string title
 * @property string number
 * @property integer orderBy
 */
class FunFacts extends Model
{
    use SoftDeletes;

    public $table = 'fun_facts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'icon',
        'title',
        'number',
        'orderBy'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'icon' => 'string',
        'title' => 'string',
        'number' => 'string',
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
