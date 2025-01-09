<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('concerts', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->dateTime('start_time');
        $table->dateTime('end_time');
        $table->integer('max_people');
        $table->integer('tickets_sold')->default(0);
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};
