<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class continente extends Model
{
    //tabla con la cual el modelo se relaciona
    protected $table="continents";
    //clave primaria
    protected $primaryKey="continent_id";
    public $timestamps=false;
    use HasFactory;
}
