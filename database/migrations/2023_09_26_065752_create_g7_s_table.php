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
        Schema::create('g7_s', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('army_no');
            $table->string('repair_type');
            $table->string('job_type');
            $table->string('vehicle_value');
            $table->string('organization');
            $table->string('reg_date');
            $table->string('nature_service');
            $table->string('live_search_result_in_charge');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g7_s');
    }
};
