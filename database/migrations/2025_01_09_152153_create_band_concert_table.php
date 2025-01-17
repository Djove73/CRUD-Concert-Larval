<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('band_concert', function (Blueprint $table) {
        $table->id();
        $table->foreignId('band_id')->constrained()->onDelete('cascade');
        $table->foreignId('concert_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('band_concert');
    }
};
