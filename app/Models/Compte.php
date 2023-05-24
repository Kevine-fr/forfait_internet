<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','numero','adresse'];

    public function forfaits()
{
    return $this->belongsToMany(Forfait::class, 'compte_forfaits');
}

}
