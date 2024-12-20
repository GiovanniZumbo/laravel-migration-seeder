<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 50)->nullable(false);
            $table->string("stazione_partenza", 80)->nullable(false);
            $table->string("stazione_arrivo", 80)->nullable(false);
            $table->date("data_partenza")->nullable(false);
            $table->time("orario_partenza")->nullable(false);
            $table->time("orario_arrivo")->nullable(false);
            $table->tinyInteger("binario")->nullable(false);
            $table->string("codice_treno")->nullable(false);
            $table->tinyInteger("numero_carrozze");
            $table->boolean("in_orario")->default(true);
            $table->boolean("cancellato")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
