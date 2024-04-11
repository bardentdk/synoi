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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('formation_titre');
            $table->string('formation_slug');
            $table->string('formation_image');
            $table->longText('formation_description');
            $table->string('formation_duree');
            $table->string('formation_cout');
            $table->string('formation_accessibilite');
            $table->string('formation_objectifs');
            $table->string('formation_prerequis');
            $table->string('formation_lien_pf');
            $table->string('formation_profil');
            $table->string('formation_delai_access');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
