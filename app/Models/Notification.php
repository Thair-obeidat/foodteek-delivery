<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'order_id', 'message', 'status'];

    public function user()
    {
        return $this->belongsTo(Client::class, 'user_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

