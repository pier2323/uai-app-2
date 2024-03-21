<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActaEntrega extends Model
{
    use HasFactory;

    protected $table = 'acta_entrega';
    
    protected $fillable = [
        'suscripcion',
        'recepcion_uai',
        'actuacion_fiscal_id',
        'unidades_id',
        'personal_entrega_id',
        'personal_recibe_id',
        'personal_uai_id'
    ];

    public function actuacionFiscal()
    {
        return $this->belongsTo(ActuacionFiscal::class);
    }
}
