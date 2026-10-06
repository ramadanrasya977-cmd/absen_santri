<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('penghuni_id')
                  ->constrained('penghunis')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            $table->date('tanggal');
            $table->time('jam_keluar')->nullable();
            $table->time('jam_masuk')->nullable();

            $table->enum('status', ['Keluar', 'Masuk'])
                  ->default('Keluar');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};