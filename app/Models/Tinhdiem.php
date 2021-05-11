<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tinhdiem extends Model
{
    protected $table = 'danhgia';
    protected $primaryKey = 'id_row';
    protected $guarded = [];
    protected $fillable = [
        'id_row', 
    ];
}
