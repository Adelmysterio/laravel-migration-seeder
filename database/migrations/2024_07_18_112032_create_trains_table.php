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
            $table->timestamps();
            $table->string('azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->date('orario_partenza');
            $table->date('orario_arrivo');
            $table->smallInteger('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');

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
