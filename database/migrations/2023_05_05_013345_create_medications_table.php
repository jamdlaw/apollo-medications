<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*
    public function up(): void
    {
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('dose', 8, 2);
            $table->string('dose_uom');
            $table->integer('frequency');
            $table->enum('time_of_day', ['morning', 'morning-and-noon', 'morning-and-evening', 'morning-and-night']);
            $table->timestamps();
        });
    }
    */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};
