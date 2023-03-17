<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainOrder extends Model
{
    use HasFactory;

    const ORDER_STATUS_PAYMENT_PENDING = 0;
    const ORDER_STATUS_PAYMENT_DONE = 1;

    const ORDER_STATUS_PENDING = 0;
    const ORDER_STATUS_PROCESSING = 1;
    const ORDER_STATUS_ON_HOLD = 2;
    const ORDER_STATUS_COMPLETED = 3;
    const ORDER_STATUS_REFUNDED = 4;
    const ORDER_STATUS_CANCELED = 5;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusColor(): string
    {
        return match ($this->status) {
            MainOrder::ORDER_STATUS_PENDING => "grey",
            MainOrder::ORDER_STATUS_ON_HOLD => "orange",
            MainOrder::ORDER_STATUS_PROCESSING => "green",
            MainOrder::ORDER_STATUS_COMPLETED => "blue",
            MainOrder::ORDER_STATUS_REFUNDED => "grey",
            MainOrder::ORDER_STATUS_CANCELED => "grey",
        };
    }
}