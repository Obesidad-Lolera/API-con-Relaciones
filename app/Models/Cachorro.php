<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cachorro extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function Animal()
    {
        return $this->belongsTo(Animal::class, "id_animal");
    }
}
