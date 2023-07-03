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
        Schema::create('objektifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodata_id');
            $table->text('kesadaran');
            $table->integer('tekanan_darah');
            $table->integer('suhu');
            $table->integer('nadi');
            $table->integer('respirasi');
            $table->integer('bb');
            $table->integer('tb');
            $table->text('kepala');
            $table->text('rambut');
            $table->text('muka');
            $table->text('mata');
            $table->text('hidung');
            $table->text('telinga');
            $table->text('mulut');
            $table->text('leher');
            $table->text('dada');
            $table->text('abdomen');
            $table->text('leopold1');
            $table->text('leopold2');
            $table->text('leopold3');
            $table->text('leopold4');
            $table->text('genetalia');
            $table->text('eks_atas');
            $table->text('eks_bawah');
            $table->timestamps();

            $table->foreign('biodata_id')->references('id')->on('biodatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objektifs');
    }
};
