<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    public $table = 'articles';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'writed_by',
        'title',
        'subject',
        'article_pic'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'writed_by' => 'string',
        'subject' => 'string',
        'article_pic' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'writed_by' => 'required|string|max:191',
        'subject' => 'required|string',
        'article_pic' => 'required|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}
