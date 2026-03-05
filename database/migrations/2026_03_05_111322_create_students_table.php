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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->index();
            $table->integer('age');
            $table->enum('sex', ['masculino', 'feminino', 'outro']);
            $table->string('email')->index();
            $table->string('phone', 20);
            $table->integer('active')->default(1)->index();
            $table->integer('deleted')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
