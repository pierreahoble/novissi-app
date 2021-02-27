<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donnateur extends Model
{
    use HasFactory;

    protected $table = 'donnateurs';

    protected $primaryKey = 'id';

    protected $guarded = ['id','created_ad','updated_at'];
}
