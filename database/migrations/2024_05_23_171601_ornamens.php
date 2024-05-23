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
        Schema::create('ornamens', function (Blueprint $table) {
            $table->id('id_ornamen');
            $table->unsignedBigInteger('bahan_id');
            $table->foreign('bahan_id')->references('id_bahan')->on('bahans');
            $table->string('nama_ornamen');
            $table->text('deskirpsi_ornamen');
            $table->string('jenis_ornamen');
            $table->string('foto_ornamen');
            $table->string('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ornamens');
    }
};
