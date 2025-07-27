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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis', 50); // relasi ke nama di jenis_obats
            $table->text('deskripsi')->nullable();
            $table->integer('stok')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
            $table->foreign('jenis')->references('nama')->on('jenis_obats')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
