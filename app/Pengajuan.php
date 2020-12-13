<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function periode(){
        return $this->belongsTo(Periode::class, 'periode_id');
    }
}
