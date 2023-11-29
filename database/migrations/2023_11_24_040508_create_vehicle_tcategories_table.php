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
        Schema::create('vehicle_tcategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('parent_id1')->index()->nullable();
            $table->foreign('parent_id1')
                    ->references('id')
                    ->on('vehicle_mcategories')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('parent_id2')->index()->nullable();
            $table->foreign('parent_id2')
                    ->references('id')
                    ->on('vehicle_scategories')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_tcategories');
    }
};
