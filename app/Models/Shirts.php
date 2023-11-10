<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shirts extends Model
{
    use HasFactory;
    protected $table = '_shirt';
    protected $fillable = [
        'brand_name',
        'size',
        'qty',
    ];
}
