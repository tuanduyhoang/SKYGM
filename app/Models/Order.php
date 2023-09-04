<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'status',
       'price',
        'phone',
        'address',
    ];

    public function user() {
        $this->hasOne(User::class, 'id', 'user_id');
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot(['quantity']);
    }
}
