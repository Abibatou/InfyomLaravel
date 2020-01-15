<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class produit
 * @package App\Models
 * @version January 15, 2020, 8:30 am UTC
 *
 * @property string name
 * @property integer prix
 * @property integer quantite
 */
class produit extends Model
{

    public $table = 'produits';
    



    public $fillable = [
        'name',
        'prix',
        'quantite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'prix' => 'integer',
        'quantite' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
