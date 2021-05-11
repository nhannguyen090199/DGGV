<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Sinhvien extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sinhvien_ma',
        'password',
    ];
    protected $table = 'sinhvien';
    protected $primaryKey = 'sinhvien_ma';
     protected $guard = 'sinhvien';
}
