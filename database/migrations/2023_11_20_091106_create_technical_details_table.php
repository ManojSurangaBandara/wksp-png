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
        Schema::create('technical_details', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('repair_type');
            $table->string('job_type');
            $table->string('nature_of_repair');
            $table->string('spare_part');
            $table->string('ex_item');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_details');
    }
};
