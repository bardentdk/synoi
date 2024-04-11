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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_nom');
            $table->string('contact_prenom');
            $table->string('contact_email');
            $table->string('contact_telephone');
            $table->string('contact_objet');
            $table->mediumText('contact_message');
            $table->string('contact_secteur');
            $table->string('contact_pj');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
