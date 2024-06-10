<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->id('provID');
            $table->string('provNombre');
            $table->string('provCodigo');
        });

        // Insertar datos iniciales
        DB::table('provincias')->insert([
            ["provID" => 1, "provNombre" => 'Ciudad Autónoma de Buenos Aires (CABA)', "provCodigo" => 'AR-C'],
            ["provID" => 2, "provNombre" => 'Buenos Aires', "provCodigo" => 'AR-B'],
            ["provID" => 3, "provNombre" => 'Catamarca', "provCodigo" => 'AR-K'],
            ["provID" => 4, "provNombre" => 'Córdoba', "provCodigo" => 'AR-X'],
            ["provID" => 5, "provNombre" => 'Corrientes', "provCodigo" => 'AR-W'],
            ["provID" => 6, "provNombre" => 'Entre Ríos', "provCodigo" => 'AR-E'],
            ["provID" => 7, "provNombre" => 'Jujuy', "provCodigo" => 'AR-Y'],
            ["provID" => 8, "provNombre" => 'Mendoza', "provCodigo" => 'AR-M'],
            ["provID" => 9, "provNombre" => 'La Rioja', "provCodigo" => 'AR-F'],
            ["provID" => 10, "provNombre" => 'Salta', "provCodigo" => 'AR-A'],
            ["provID" => 11, "provNombre" => 'San Juan', "provCodigo" => 'AR-J'],
            ["provID" => 12, "provNombre" => 'San Luis', "provCodigo" => 'AR-D'],
            ["provID" => 13, "provNombre" => 'Santa Fe', "provCodigo" => 'AR-S'],
            ["provID" => 14, "provNombre" => 'Santiago del Estero', "provCodigo" => 'AR-G'],
            ["provID" => 15, "provNombre" => 'Tucumán', "provCodigo" => 'AR-T'],
            ["provID" => 16, "provNombre" => 'Chaco', "provCodigo" => 'AR-H'],
            ["provID" => 17, "provNombre" => 'Chubut', "provCodigo" => 'AR-U'],
            ["provID" => 18, "provNombre" => 'Formosa', "provCodigo" => 'AR-P'],
            ["provID" => 19, "provNombre" => 'Misiones', "provCodigo" => 'AR-N'],
            ["provID" => 20, "provNombre" => 'Neuquén', "provCodigo" => 'AR-Q'],
            ["provID" => 21, "provNombre" => 'La Pampa', "provCodigo" => 'AR-L'],
            ["provID" => 22, "provNombre" => 'Río Negro', "provCodigo" => 'AR-R'],
            ["provID" => 23, "provNombre" => 'Santa Cruz', "provCodigo" => 'AR-Z'],
            ["provID" => 24, "provNombre" => 'Tierra del Fuego', "provCodigo" => 'AR-V'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provincias');
    }
};
