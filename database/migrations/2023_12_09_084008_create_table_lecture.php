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
        Schema::create('table_lecture', function (Blueprint $table) {
            $table->id();
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('histoire_id');
            $table->integer('sequence');
            $table->timestamps();
            $table->foreign('histoire_id')->references('id')->on('histoire');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_lecture');
    }
};
