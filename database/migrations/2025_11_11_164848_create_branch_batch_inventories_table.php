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
        Schema::create('branch_batch_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->constrained('id')->on('batches')->onDelete('cascade');
            $table->foreignId('branch_id')->constrained('id')->on('branches')->onDelete('cascade');
            $table->integer('quantity_at_branch')->notNull();
            $table->timestamps();
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_batch_inventories');
    }
};
