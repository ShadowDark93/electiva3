<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consumo_electrico extends Model
{
    use HasFactory;

    protected $fillable=[
      'consumo',
      'created_at'
    ];
}