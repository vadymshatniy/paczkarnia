<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DeliveryProduct extends Model
{
    use HasFactory;
    const SUCCESS = 1;
    const CHANGES = 2;
    const DELETE = 3;
    public function product()
    {
        return $this->belongsTo(Product::class)->withDefault();
    }
}
