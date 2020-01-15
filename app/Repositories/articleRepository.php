<?php

namespace App\Repositories;

use App\Models\article;
use App\Repositories\BaseRepository;

/**
 * Class articleRepository
 * @package App\Repositories
 * @version January 15, 2020, 8:35 am UTC
*/

class articleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'prix',
        'quantite'
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
        return article::class;
    }
}
