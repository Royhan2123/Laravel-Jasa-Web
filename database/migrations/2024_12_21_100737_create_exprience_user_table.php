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
        Schema::create('exprience_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detail_user_id')->nullable()->index('fk_exprience_user_to_detail_user');
            $table->string('exprience')->nullable();
            $table->softDeletes(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exprience_user');
    }
};
