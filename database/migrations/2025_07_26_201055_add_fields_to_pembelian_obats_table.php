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
            $table->integer('jumlah')->default(1)->after('resep_id');
            $table->decimal('harga_satuan', 12, 2)->nullable()->after('jumlah');
            $table->decimal('total_harga', 12, 2)->nullable()->after('harga_satuan');
            $table->string('status')->nullable()->after('total_harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembelian_obats', function (Blueprint $table) {
            $table->dropColumn(['jumlah', 'harga_satuan', 'total_harga', 'status']);
        });
    }
};
