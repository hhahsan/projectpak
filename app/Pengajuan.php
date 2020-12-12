<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function periode(){
        return $this->belongsTo(Periode::class);
    }
}
