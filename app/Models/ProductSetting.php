<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSetting extends Model
{
    use HasFactory;

    protected $table = "products_setting";

    protected $fillable = ['type', 'min_quantity', 'max_quantity', 'first_day_price'];

    protected $hidden = ['created_at', 'updated_at'];

    public static $prices_by_day = [
        1 => 1,
        2 => 0.95,
        3 => 0.87,
        4 => 0.83,
    ];

    public static $types = [
        1 => 'PLAN',
        2 => 'MÉMOIRE & RAPPORT',
        3 => 'BROCHURE & LIVRET',
        4 => 'AFFICHE',
        5 => 'DOSSIER DE PLANS',
    ];
}