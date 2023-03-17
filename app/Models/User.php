<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    const USER_TITLE_MR = "Mr";
    const USER_TITLE_MME = "Mme";

    const USER_ROLE_CUSTOMER = "customer";
    const USER_ROLE_ADMIN = "admin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'customer_type',
        'email',
        'phone',
        'password',
        'shiping_address',
        'shiping_postal',
        'shiping_city',
        'billing_address',
        'billing_postal',
        'billing_city',
        'service_id',
        'social_reason',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Order()

    {

        return $this->hasMany(Order::class);
    }

    public function Commande()

    {

        return $this->hasMany(Commande::class);
    }
}
