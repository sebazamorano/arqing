<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntrevistaArquitectura extends Model
{
    protected $table = 'ea';

    public $timestamps = false;

    protected $fillable = [
        'Folio',
        'jefe_proyecto',
        'Empresa',
        'nombre_proyecto',
        'Gerente',
        'descripcion',
        'criticidad',
        'Fecha',
        'Proyecto',
        'Estado'
    ];
}
