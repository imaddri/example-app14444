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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->integer('Registration_number');
            $table->string('request_type');
            $table->string('reponce_type')->default('NO');
            $table->string('reason_of_rejecting_negative_request')->default('NULL');
            $table->string('fils')->default('NULL');
            $table->string('request_accept')->default('NO');
            $table->string('request_no_accept')->default('NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
