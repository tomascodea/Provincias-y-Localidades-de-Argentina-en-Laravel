<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;

    protected $table = "localidades";

    // Especifica la clave primaria
    protected $primaryKey = 'locID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'provID',
        'locNombre',
        'locCodigoPostal'
    ];

    /**
     * Esto indica que cada localidad pertenece a una provincia.
     */
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provID', 'provID');
    }
}
