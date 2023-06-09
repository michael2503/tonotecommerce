<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'sku',
        'quantity',
        'sold',
        'old_price',
        'sales_price',
        'images',
        'description',
        'status',
     ];
}
