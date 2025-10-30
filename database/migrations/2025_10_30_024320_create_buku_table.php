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
       Schema::create('pelanggan', function (Blueprint $table) {
        $table->increments('buku_id');
        $table->string('judul_buku', 100);
        $table->string('penulis', 100);
        $table->string('penerbit');
        $table->date('tahun_terbit')->nullable();
        $table->int('jumlah_eksemplar',100);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
