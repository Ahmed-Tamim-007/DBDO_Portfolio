<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_img',
        'product_title',
        'product_des',
        'category',
        'price',
        'designer',
        'link',
    ];
}
