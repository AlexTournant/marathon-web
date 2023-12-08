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
        Schema::create('suite', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chapitre_source_id');
            $table->unsignedBigInteger('chapitre_destination_id');
            $table->text('reponse');
            $table->timestamps();
            $table->foreign('chapitre_source_id')->references('id')->on('chapitres');
            $table->foreign('chapitre_destination_id')->references('id')->on('chapitres');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suite');
    }
};
