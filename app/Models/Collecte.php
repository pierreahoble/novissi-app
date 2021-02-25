<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collecte extends Model
{
    use HasFactory;


    protected $fillable=[
        'objet',
        'montant',
        'beneficiaire',
        'datedebut',
        'datefin',
        'user_id',
        'categorie_id'

    ];


    /**
     * Get the user associated with the Collecte
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }




}
