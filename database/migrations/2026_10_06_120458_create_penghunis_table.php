<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penghunis', function (Blueprint $table) {
            $table->id();
            $table->string('NIM')->unique();
            $table->string('nama');
            $table->string('no_hp')->nullable();
            $table->enum('status', ['Ada di Mahad', 'Sedang Keluar'])
                  ->default('Ada di Mahad');
            $table->foreignId('kamar_id')
                  ->constrained('kamars')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penghunis');
    }
};