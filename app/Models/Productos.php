<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'categoria',
        'descripcion',
        'precio',
        'descuento',
        'imagen',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
