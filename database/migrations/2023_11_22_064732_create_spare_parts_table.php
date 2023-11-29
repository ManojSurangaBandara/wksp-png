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

            Schema::create('spare_parts', function (Blueprint $table) {
                $table->id();
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
                $table->unsignedBigInteger('parent_id3')->index()->nullable();
                $table->foreign('parent_id3')
                        ->references('id')
                        ->on('vehicle_tcategories')
                        ->onDelete('cascade');  
                $table->unsignedBigInteger('parent_id4')->index()->nullable();
                $table->foreign('parent_id4')
                        ->references('id')
                        ->on('supplier_details')
                        ->onDelete('cascade'); 
                    $table->decimal('price', 9, 2);          
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spare_parts');
    }
};
