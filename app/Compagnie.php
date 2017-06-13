<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Compagnie extends Model
{
    public function proprietaire() {
        return $this->belongsTo(Proprietaire::Class);
    }

    public function arme() {
        return $this->hasMany(Arme::Class);
    }

    public function employe() {
        return $this->hasMany(Employe::Class);
    }
}
