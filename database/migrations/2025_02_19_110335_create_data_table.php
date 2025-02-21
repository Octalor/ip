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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('rubric');
            $table->string('timedata');
            $table->string('description');
            $table->string('montant');
            $table->string('account');
            $table->string('organisation');
            $table->string('tranche');
            $table->string('notes');
            $table->timestamps();
            
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
