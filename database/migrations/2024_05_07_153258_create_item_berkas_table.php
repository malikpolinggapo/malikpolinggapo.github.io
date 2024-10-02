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
        Schema::create('item_berkas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('template_berkas_id');
            $table->timestamps();

            $table->foreign('template_berkas_id')->references('id')->on('template_berkas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_berkas');
    }
};
