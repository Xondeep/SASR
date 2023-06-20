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
        Schema::create('temps', function (Blueprint $table) {
            
                $table->integer('id')->default(1);
                $table->string('name');
                $table->string('address');
                $table->string('class');
                $table->string('phone_number');
                $table->string('parent_email');
                $table->string('rfid_card')->nullable();
                $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temps');
    }
};
