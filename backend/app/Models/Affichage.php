<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affichage extends Model
{
    use HasFactory;
    protected $table='affichages';
    protected $fillable=[
        'nom',
        'prenom'
    ];
}
