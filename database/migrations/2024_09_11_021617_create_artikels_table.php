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
        // Schema::create('artikels', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('judul');
        //     $table->text('konten');
        //     $table->enum('kategori', ['moms', '']);
        //     $table->timestamps();
        // });
        

        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();  // Untuk menyimpan nama file gambar
            $table->string('judul');
            $table->text('konten');
            // $table->enum('kategori', ['moms', 'kucing', 'burung', 'hamster', 'kelinci']);
            $table->timestamps();  // Menyimpan created_at dan updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
