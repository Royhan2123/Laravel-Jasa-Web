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
        Schema::create('tagline', function (Blueprint $table) {
            $table->id();
            // $table->integer('services_id')->nullable();
            $table->foreignId('services_id')->nullable()
            ->index('fk_tagline_to_service');
            $table->string('tagline')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagline');
    }
};
