<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Cliente extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('producto',function(Blueprint $tabla){
            $tabla->int('idCliente');
            $tabla->string('nombre');
            $tabla->string('apellido');
            $tabla->string('domicilio');
            $tabla->string('telefono');
            $tabla->string('mail');
            $tabla->string('edad');
            $tabla->timestamps();
        });
    }
}

    
