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
    public function likes(){
        return $this->hasMany(Like::class);
    }
    public function likedBy()
    {
        return $this->belongsToMany(User::class, 'likes', 'productos_id', 'user_id')->withTimestamps();
    }
}
