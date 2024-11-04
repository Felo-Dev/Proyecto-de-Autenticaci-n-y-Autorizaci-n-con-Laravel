<?php
// app/Models/Region.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'regions';

    // Llave primaria
    protected $primaryKey = 'id_reg';

    // Campos que se pueden asignar en masa
    protected $fillable = ['description', 'status'];

    // Relación uno a muchos con Commune
    public function communes()
    {
        return $this->hasMany(Commune::class, 'id_reg', 'id_reg');
    }
}
