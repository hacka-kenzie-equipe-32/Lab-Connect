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
        Schema::create('examination_result', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('result');
            $table->uuid('request_id');
            $table->uuid('laboratory_id');

            $table->foreign('request_id')->references('id')->on('examination_requests');
            $table->foreign('laboratory_id')->references('id')->on('laboratories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_result');
    }
};
