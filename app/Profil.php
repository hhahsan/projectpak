<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
