<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'telefono',
        'direccion',
        'user_id',
        'productos_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
