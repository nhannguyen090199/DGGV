<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giangvien extends Model
{
    protected $table = 'giangvien';
    protected $primaryKey = 'gv_ma';
    protected $guarded = [];
    protected $fillable = [
        'gv_ma', 
    ];
}