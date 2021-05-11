<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TKB extends Model
{
    protected $table = 'thoi_khoa_bieu';
    protected $primaryKey = 'id_row';
    protected $guarded = [];
    protected $fillable = [
        'id_row', 
    ];
}