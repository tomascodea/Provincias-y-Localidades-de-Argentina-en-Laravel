<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = "provincias";

    // Especifica la clave primaria
    protected $primaryKey = 'provID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'provNombre',
        'provCodigo'
    ];

    /**
     * Esto indica que una provincia puede tener muchas localidades.
     */

    public function localidades()
    {
        return $this->hasMany(Localidad::class, 'provID', 'provID');
    }
}
