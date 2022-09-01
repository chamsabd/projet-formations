<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_debut');
            $table->string('description');
            $table->date('date_fin');
            $table->foreignId('responsable_id')->constrained()->on('Users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('formateur_id')->nullable()->constrained()->on('Users')->onDelete('restrict')->onUpdate('restrict')->default(null);
            $table->foreignId('formateur_externe_id')->nullable()->constrained()->on('Users')->onDelete('restrict')->onUpdate('restrict'); //change to formatuer externe
            $table->decimal("prix");
            $table->boolean('etat');
            $table->integer('nbr_place');
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
        Schema::dropIfExists('formations');
    }
}
