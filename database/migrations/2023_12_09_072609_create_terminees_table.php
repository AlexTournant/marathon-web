<?php

use App\Models\Histoire;
use App\Models\User;
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
        Schema::create('terminees', function (Blueprint $table) {
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Histoire::class);
            $table->integer('nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terminees');
    }
};
