<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodata_id');
            $table->date('tgl');
            $table->text('keluhan');
            $table->integer('tekanan');
            $table->integer('berat');
            $table->integer('tinggi');
            $table->text('letak');
            $table->integer('djj');
            $table->enum('kaki', ['+', '-']);
            $table->text('hasillab');
            $table->text('tindakan');
            $table->text('nasihat');
            $table->text('keterangan');
            $table->date('jadwal_kembali');
            $table->timestamps();

            $table->foreign('biodata_id')->references('id')->on('biodatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkups');
    }
};
