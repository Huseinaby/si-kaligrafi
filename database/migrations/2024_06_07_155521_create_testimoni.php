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
            $table->unsignedBigInteger('id_user'); 
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreignId('karya_id')->constrained('karyas')->onDelete('cascade');
            $table->string('nama_panitia');
            $table->string('slug');
            $table->text('isi_testimoni');
            $table->timestamp('tgl_testimoni');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
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
