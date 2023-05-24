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
        Schema::create('compte_forfaits', function (Blueprint $table) {
            $table->unsignedBigInteger('compte_id');
            $table->unsignedBigInteger('forfait_id');
            $table->timestamps();
        
            $table->foreign('compte_id')->references('id')->on('comptes')->onDelete('cascade');
            $table->foreign('forfait_id')->references('id')->on('forfaits')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compte_forfaits');
    }
};
