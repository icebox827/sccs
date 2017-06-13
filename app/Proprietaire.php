<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Proprietaire extends Model
{
    public function compagnie() {
        return $this->hasMany('App\Compagnie');
    }
}
