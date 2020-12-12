<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function get_user_id()
    {
        $level = \App\Level::where('nama' , 'guru')->first();
        return $level->id;
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($model){
            $model->level_id = $model->get_user_id();
        });

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profil()
    {
        return $this->hasMany(Profil::class);
    }
    
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }
}
