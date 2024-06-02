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
   
        Schema::create('company', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->double('salary');
            $table->timestamps();
    
          });

    }

    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
