<?php

namespace App\Repositories;

use App\Models\Article;
use App\Repositories\BaseRepository;

/**
 * Class ArticleRepository
 * @package App\Repositories
 * @version August 14, 2020, 11:25 pm UTC
*/

class ArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'writed_by',
        'subject',
        'article_pic'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }
}
