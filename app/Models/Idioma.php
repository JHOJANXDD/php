<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table="languages";
    protected $primaryKey="language_id";
    public $timestamps=false;
    use HasFactory;
    
    public function paises(){
        return $this->belongsToMany(Country::class,
                                    'country_languages',
                                    'language_id',
                                    'country_id'
                                )->withPivot('official');
    }

   
}
