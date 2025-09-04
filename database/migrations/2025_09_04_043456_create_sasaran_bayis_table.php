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
        Schema::create('sasaran_bayis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir')->nullable();
            $table->string('umur')->nullable();
            $table->integer('tinggi_badan');
            $table->decimal('berat_badan',  5, 2);
            $table->string('status_bbu');
            $table->string('status_tbu');
            $table->string('status_bbtb');
            $table->integer('lingkar_kepala')->nullable();
            $table->string('LILA')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sasaran_bayis');
    }
};
