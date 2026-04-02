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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('Fullname');
            $table->string('NIP')->unique();
            $table->string('NIDN')->unique();
            $table->string('Pendidikan Terakhir');
            $table->string('Jurusan_id');
            $table->data('Tanggal_lahir');
            $table->string('Tempat_lahir');
            $table->text('Alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
