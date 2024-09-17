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
        Schema::create('courses', callback: function (Blueprint $table) {
            $table->id();
            $table->string('title',40);
            $table->string('description');
            $table->string('start_date',25);
            $table->string('end_date',25);
            $table->string('status',1);
          
            // will change as foregin key when we will create admin,super admin table 
            $table->string('instructor_id',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
