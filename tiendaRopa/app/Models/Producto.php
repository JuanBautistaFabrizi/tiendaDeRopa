<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Model
{
    use HasFactory;
    public function up(){
        Schema::create('producto',function(Blueprint $tabla){
            $tabla->int('idproducto');
            $tabla->string('modelo');
            $tabla->string('color');
            $tabla->string('talle');
            $tabla->string('precio');
            $tabla->timestamps();
        });

        
    }

    
}
