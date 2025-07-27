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
        Schema::table('pembelian_obats', function (Blueprint $table) {
            $table->foreignId('obat_id')->nullable()->after('pasien_id')->constrained('obats')->onDelete('cascade');
            $table->foreignId('resep_id')->nullable()->after('obat_id')->constrained('reseps')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembelian_obats', function (Blueprint $table) {
            $table->dropForeign(['obat_id']);
            $table->dropForeign(['resep_id']);
            $table->dropColumn(['obat_id', 'resep_id']);
        });
    }
};
