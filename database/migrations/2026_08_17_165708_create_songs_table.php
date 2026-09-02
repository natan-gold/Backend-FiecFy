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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('album_id')->constrained()->cascadeOnDelete();

            //Tabela Sing
            $table->string('title');

            //Tabela duração_sgundos
            $table->integer('duration_seconds');

            //Tabela explicíto
            $table->boolean('is_explicit')->default(false); //Flag do conteúdo exolicíto

            $table->integer('track_never')->default(1); //Faixa 1, 2 ,3..

            $table->string('audio_path')-> nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
