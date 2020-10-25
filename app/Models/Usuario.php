<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
       'nombre', 'email', 'telefono','password', 'rol_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Unión con usuario_rol
    public function rol()
    {
        return $this->belongsTo('App\Models\Rol');
    }
    ///Unión con usuario_facturas
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura');
    }
}
