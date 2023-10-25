<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    const NEW = 1;
    const ACTIVE = 2;
    const READY = 3;
    const SENT = 4;
    const DONE = 5;
    const CANCELED = 6;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'tel',
        'date',
        'time',
        'address',
        'message',
        'american_number',
        'chocolate_number',
        'pumpkin_number',
        'spanish_number',
        'mini_number'
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'date',

    ];
    public function delivery_products()
    {
        return $this->hasMany(DeliveryProduct::class);
    }




    public function status_title()
    {
        if ($this->status == self::NEW) {
            $status_title = 'Nowe zamówienie';
        } elseif ($this->status == self::ACTIVE) {
            $status_title = 'W toku przygotowania';
        } elseif ($this->status == self::READY) {
            $status_title = 'Gotowe';
        } elseif ($this->status == self::SENT) {
            $status_title = 'Wysłane';
        } elseif ($this->status == self::DONE) {
            $status_title = 'Wykonane';
        } elseif ($this->status == self::CANCELED) {
            $status_title = 'Odwołane';
        } else {
            $status_title = 'Status newiadomy';
        }
        return $status_title;
    }
    public static function status_label($status)
    {
        if ($status == self::NEW) {
            $status_title = 'Nowe zamówienie';
        } elseif ($status == self::ACTIVE) {
            $status_title = 'W toku przygotowania';
        } elseif ($status == self::READY) {
            $status_title = 'Gotowe';
        } elseif ($status == self::SENT) {
            $status_title = 'Wysłane';
        } elseif ($status == self::DONE) {
            $status_title = 'Wykonane';
        } elseif ($status == self::CANCELED) {
            $status_title = 'Odwołane';
        } else {
            $status_title = 'Status newiadomy';
        }
        return $status_title;
    }
}
