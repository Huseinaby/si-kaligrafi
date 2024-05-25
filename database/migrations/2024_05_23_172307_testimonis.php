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
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->foreign('username')->references('username')->on('users');
            $table->foreignId('karya_id')->constrained('karyas')->onDelete('cascade');
            $table->string('nama_panitia');
            $table->text('isi_testimoni');
            $table->timestamp('tgl_testimoni')->nullable();
            $table->string('lokasi_masjid');
            $table->string('nama_masjid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
