<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';
    

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }
}
