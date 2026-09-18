<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')->nullable();

            // Gambar iklan
            $table->string('image')->nullable();

            // Link yang dibuka ketika banner diklik
            $table->string('link')->nullable();

            // Jadwal tampil iklan
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            // Aktif / tidak aktif
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};