<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('ref_annonce'); // Champ ref_annonce de type string (varchar)
            $table->float('prix_annonce'); // Champ prix_annonce de type float (nombre à virgule)
            $table->float('superfice_habitable'); // Champ superfice_habitable de type float (nombre à virgule)
            $table->integer('nombre_de_piece'); // Champ nombre_de_piece de type integer
            $table->foreignId('agent_id'); // Champ agent_id est une clé étrangère de type unsignedBigInteger
                                           // permettant de faire référence à l'id de 'agent'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
};
