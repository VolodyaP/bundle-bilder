<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Osiset\ShopifyApp\Contracts\ShopModel as ShopModelModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Osiset\ShopifyApp\Traits\ShopModel;

class User extends Authenticatable implements ShopModelModel
{
    use HasFactory;
    use Notifiable;
    use ShopModel;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }
}
