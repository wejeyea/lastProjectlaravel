<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'name',
        'detail',
        'price',
        'image',
        'created_at',
        'updated_at',
    ];

    public function cartdetail(){
        return $this->hasMany(CartDetail::class, 'cart_id');
    }

    public function historydetail(){
        return $this->hasMany(HistoryDetail::class, 'history_id');
    }
}
