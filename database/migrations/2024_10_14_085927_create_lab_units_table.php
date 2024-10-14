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
       

        Schema::create('lab_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('lab_id')->constrained()->cascadeOnDelete();
            $table->string('line_one');
            $table->string('line_two')->nullable();
            $table->string('line_three')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city');
            $table->string('postal_code');
            $table->decimal('lattitude', 8, 6)->nullable();
            $table->decimal('longitude', 8, 6)->nullable();
            $table->decimal('altitude', 8, 6)->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('image', 2048)->nullable();
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['name', 'lab_id']);
        });


        Schema::create('user_lab_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('lab_unit_id')->nullable()->constrained()->cascadeOnDelete();
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_units');
        Schema::dropIfExists('user_lab_units');
    }
};
