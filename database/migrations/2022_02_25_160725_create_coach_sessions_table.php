<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('coach_sessions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('session_id')->constrained()->onDelete('cascade');
            $table->foreignId('staff_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('coach_sessions');
    }
};