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
        Schema::table('reseps', function (Blueprint $table) {
            $table->foreignId('dokter_id')->nullable()->after('pasien_id')->constrained('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reseps', function (Blueprint $table) {
            $table->dropForeign(['dokter_id']);
            $table->dropColumn('dokter_id');
        });
    }
};
