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
        Schema::create('sasaran_remajas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->integer('tinggi_badan');
            $table->decimal('berat_badan',  5, 2);
            $table->decimal('imt', 5, 2)->nullable();
            $table->integer('lingkar_perut')->nullable();
            $table->string('tekanan_darah')->nullable();
            $table->decimal('gula_darah', 5, 2)->nullable();
            $table->decimal('hemogoblin', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sasaran_remajas');
    }
};
