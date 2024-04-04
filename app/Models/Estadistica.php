<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;

    protected $fillable = ['monto', 'dia'];

    public function registroHistorico()
    {
        return $this->belongsTo(RegistroHistorico::class);
    }
}
