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
        Schema::create('user_entity', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('entity_id');
            $table->timestamps();

            $table->primary(['user_id', 'entity_id']);

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('entity_id')->references('id')->on('entity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_country');
    }
};
