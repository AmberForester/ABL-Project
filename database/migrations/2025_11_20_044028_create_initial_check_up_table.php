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
        Schema::create('initial_check_up', function (Blueprint $table) {
            $table->id();
            $table->float('weight');
            $table->float('height');
            $table->float('temperature');
            $table->float('tension');
            $table->foreignId('patient_id')->nullable()->constrained('patients')->onDelete('cascade');
            $table->foreignId('doctor_id')->nullable()->constrained('doctors')->onDelete('cascade');
            $table->foreignId('nurse_id')->nullable()->constrained('nurses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('initial_check_up');
    }
};
