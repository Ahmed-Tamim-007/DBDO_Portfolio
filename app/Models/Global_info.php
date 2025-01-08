<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Global_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'Company_logo',
        'Company_name',
        'Company_address',
        'Phone',
        'Whatsapp',
        'Email_address',
        'AboutUs_text',
    ];
}
