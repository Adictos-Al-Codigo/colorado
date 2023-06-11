<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoModel extends Model
{
    protected $table = "tipo";
    public $timestamps = false;
    public $fillable = ['tipo','estado'];
}
