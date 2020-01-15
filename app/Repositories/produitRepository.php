<?php

namespace App\Repositories;

use App\Models\produit;
use App\Repositories\BaseRepository;

/**
 * Class produitRepository
 * @package App\Repositories
 * @version January 15, 2020, 8:30 am UTC
*/

class produitRepository extends BaseRepository
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
        return produit::class;
    }
}
