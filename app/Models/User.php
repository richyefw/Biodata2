<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('warteg', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nama');
            $table->string('rombel');
            $table->string('rayon');
            $table->string('ket');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warteg');
    }
};
