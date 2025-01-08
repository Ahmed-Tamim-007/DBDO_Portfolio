<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeader extends Model
{
    use HasFactory;
    protected $fillable = [
        'Image_1',
        'Title_1',
        'Image_2',
        'Title_2',
        'Image_3',
        'Title_3',
    ];
}
