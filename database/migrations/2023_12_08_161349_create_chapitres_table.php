<?php

use App\Models\Histoire;
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
        Schema::create('chapitres', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('titrecourt');
            $table->text('texte');
            $table->string('media')->nullable();
            $table->string('question')->nullable();
            $table->foreignIdFor(Histoire::class);
            $table->boolean('premier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapitres');
    }
};
