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
        Schema::create('subjektifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodata_id');
            $table->text('keluhan');
            $table->text('riwayat_penyakit');
            $table->text('riwayat_penyakit_keluarga');
            $table->integer('menikah_ke');
            $table->integer('usia_menikah');
            $table->integer('lama_menikah');
            $table->date('HPHT');
            $table->integer('menarche');
            $table->integer('lama_haid');
            $table->integer('siklus_haid');
            $table->string('warna');
            $table->string('flour_albus');
            $table->text('riwayat_kehamilan');
            $table->text('riwayat_kb');
            $table->timestamps();



            $table->foreign('biodata_id')->references('id')->on('biodatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjektifs');
    }
};
