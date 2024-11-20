<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'stock',
        'code',
        'basic_price',
        'selling_price',
        'show_in_transaction',
        'use_stock',
    ];

    protected $attributes = [
        'stock' => 10, 
        'basic_price' => 5000, 
        'show_in_transaction' => false, 
        'use_stock' => false, 
        
    ];
}
