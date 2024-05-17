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
        Schema::create('lipsticks', function (Blueprint $table) {
            $table->id(); //1 column
            $table->string('brand'); //2 column
            $table->foreignId('lipstick_category_id')->constrained('lipstick_categories')->cascade('NO ACTION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lipsticks');
    }
};
