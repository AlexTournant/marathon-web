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
        Schema::create('suites', function (Blueprint $table) {
            $table->foreignId('chapitre_source_id');
            $table->foreignId('chapitre_destination_id');
            $table->text('reponse');
            $table->foreign('chapitre_source_id')->references('id')->on('chapitres');
            $table->foreign('chapitre_destination_id')->references('id')->on('chapitres');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suites');
    }
};
