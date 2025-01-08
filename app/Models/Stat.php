<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;
    protected $fillable = [
        'st_num_1',
        'st_title_1',
        'st_para_1',
        'st_num_2',
        'st_title_2',
        'st_para_2',
        'st_num_3',
        'st_title_3',
        'st_para_3',
    ];
}
