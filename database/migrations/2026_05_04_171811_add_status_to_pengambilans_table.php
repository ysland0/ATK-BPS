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
        Schema::table('pengambilans', function (Blueprint $table) {
            // Default 'pending' supaya saat user isi form, statusnya otomatis menunggu
            $table->string('status')->default('pending')->after('tanda_tangan');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengambilans', function (Blueprint $table) {
            //
        });
    }
};
