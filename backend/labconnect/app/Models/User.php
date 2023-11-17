<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;


class User extends Model/** Authenticatable implements JWTSubject*/ {

    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'birth_date',
        'cpf',
        'user_type',
        'isActive'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];


    public function getJWTIdentifier() {
        return $this->getKey();
    }


    public function getJWTCustomClaims() {
        return [];
    }
}