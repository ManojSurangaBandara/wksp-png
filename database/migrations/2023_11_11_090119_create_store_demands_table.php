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
        Schema::create('store_demands', function (Blueprint $table) {
            $table->id();
            $table->string('army_no');
            $table->string('section_no');
            $table->string('control_no');
            $table->string('receipt_no');
            $table->date('receipt_date');	
			$table->string('group_workshop');
			$table->string('depot_workshop');
			$table->string('order_no');
			$table->string('from_workshop');
			$table->string('passed_to');
			$table->date('passed_date');
            $table->string('part_no');
            $table->string('vote_no');
            $table->string('vehicle_desc');
			$table->string('quantity');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_demands');
    }
};
