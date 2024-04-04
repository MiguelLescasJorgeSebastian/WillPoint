<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistroHistorico extends Model
{
    use HasFactory;
    protected $fillable = [
        'monto_inicial',
        'monto_final',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
