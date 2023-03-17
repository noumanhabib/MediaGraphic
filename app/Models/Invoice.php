<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    const STATUS_PENDING = "pending";
    const STATUS_DONE = "done";
    const STATUS_CANCEL = "cancel";

    public function order()
    {
        return $this->belongsTo(MainOrder::class, "main_order_id");
    }
}