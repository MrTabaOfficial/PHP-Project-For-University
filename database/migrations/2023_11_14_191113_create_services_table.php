<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('service_code');
            $table->text('description');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('Services');
    }
};