<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleModel extends Model
{
    protected $table= 'detalle';
    public $timestamps= false;
    public $fillable = ['detalle','id_tipo','estado'];
}
