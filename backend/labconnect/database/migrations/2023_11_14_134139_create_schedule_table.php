<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('user_id');
            $table->enum('status', ['created', 'analyzing', 'done', 'failure'])->default('created');
            $table->decimal('totalPrice');
            $table->boolean('paid')->default(false);
            $table->timestamps(); // created_at y updated_at

        });

        Schema::table('schedules', function (Blueprint $table) {


            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_model');
    }
};
