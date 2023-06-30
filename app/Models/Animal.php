<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "animales";

    public function Cachorros()
    {
        return $this->hasMany(Cachorro::class, "id_animal");
    }


    public function Biomas()
    {
        return $this->belongsToMany(Bioma::class, "habita");
    }
}
