<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vande extends Model
{
    protected $table = 'vande';
    protected $primaryKey = 'vande_id';
    protected $guarded = [];
    protected $fillable = [
        'order_id', 
    ];
}
