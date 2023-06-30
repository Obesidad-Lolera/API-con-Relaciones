<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Bioma extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['nombre'];


    public function Animales()
    {
        return $this->belongsToMany(Animal::class,"habita");
    }
}

