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
        Schema::create('job_cards', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->date('received_date');
            $table->string('nature_of_repair');
            $table->string('repairs_req');
			$table->string('job_date_count');
			$table->string('wd_no');
			$table->date('in_inspect_date');
			$table->date('work_start_date');
			$table->date('work_end_date');
			$table->string('mileage');
			$table->date('delivery_date');
			$table->string('repair_req');
			$table->date('out_inspect_date');
			$table->string('store_req');
			$table->string('voucher_serial_no');
			$table->date('date_req');
			$table->date('date_rev');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_cards');
    }
};
