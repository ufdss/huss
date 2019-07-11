<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class productfav extends Model
{
    protected $fillable = [
        'product_id', 'user_id',
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function product () {
        return $this->belongsTo(Product::class);
    }
}
