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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_guru');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->varchar('mata_pelajaran');
            $table->varchar('no_telpon');
            $table->varchar('username');
            $table->varchar('password');
            $table->varchar('role');
            $table->enum('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
