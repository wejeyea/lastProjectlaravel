<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'history_detail',
        'product_id',
        'quantity',
    ];

    public function history(){
        return $this->belongsTo(History::class, 'history_id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
