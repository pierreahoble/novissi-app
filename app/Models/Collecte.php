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




}
