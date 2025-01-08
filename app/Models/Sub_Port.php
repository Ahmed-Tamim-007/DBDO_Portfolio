<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Port extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_h',
        'sub_p',

        'portfolio_h1',
        'portfolio_h2',
        'portfolio_para',

        'portfolio_img_1',
        'portfolio_1_h1',
        'portfolio_1_h2',
        'portfolio_para_1',

        'portfolio_img_2',
        'portfolio_2_h1',
        'portfolio_2_h2',
        'portfolio_para_2',

        'portfolio_img_3',
        'portfolio_3_h1',
        'portfolio_3_h2',
        'portfolio_para_3',
    ];
}
