<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phieu extends Model
{
    protected $table = 'phieu';
    protected $primaryKey = 'ma_phieu';
    protected $guarded = [];
    protected $fillable = [
        'ma_phieu', 
    ];
}