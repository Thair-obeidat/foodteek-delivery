<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCaptain extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone', 'vehicle_type', 'status'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'captain_id');
    }
}
