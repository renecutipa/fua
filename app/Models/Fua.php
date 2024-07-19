<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fua extends Model
{
    use HasFactory;

    protected $fillable = [
      "codigo_ipress",
      "tipo_documento",
      "dni",
      "asegurado_paterno",
      "asegurado_materno",
      "asegurado_nombres",
      "asegurado_onombres",
      "asegurado_genero",
      "nacimiento_d",
      "nacimiento_m",
      "nacimiento_a",
      "fallecimiento_d",
      "fallecimiento_m",
      "fallecimiento_a",
      "historia",
      "fua_atencion_d",
      "fua_atencion_m",
      "fua_atencion_a",
      "fua_atencion_h",
      "fua_atencion_i",
      "codigo_prestacional",
    ];
}
