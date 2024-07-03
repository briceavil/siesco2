<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;
    protected $table = 'periodos';
    protected $fillable = ['inicio', 'fin'];


    public function clases()
    {
        return $this->hasMany(Clase::class);
    }
}
