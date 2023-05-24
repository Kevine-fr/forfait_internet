<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;

    protected $fillable = ['nomF' , 'dateF', 'dureeF', 'prixF'];

    public function comptes()
    {
        return $this->belongsToMany(Compte::class, 'compte_forfaits');
    }
}
