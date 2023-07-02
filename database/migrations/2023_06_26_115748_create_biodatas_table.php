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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('umur');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->text('alamat');
            $table->biginteger('nomer_tlpn');
            $table->string('nama_suami');
            $table->integer('umur_suami');
            $table->string('agama_suami');
            $table->string('pendidikan_suami');
            $table->string('pekerjaan_suami');
            $table->text('alamat_suami');
            $table->biginteger('nomer_suami');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
