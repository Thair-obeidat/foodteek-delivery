<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'captain_id', 'restaurant_id', 'status', 'total_price', 'delivery_fee'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function captain()
    {
        return $this->belongsTo(DeliveryCaptain::class, 'captain_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function statusUpdates()
    {
        return $this->hasMany(OrderStatusUpdate::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
