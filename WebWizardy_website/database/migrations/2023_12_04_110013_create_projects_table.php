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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->unsignedBigInteger('pricing_id');
            $table->integer('progress_percentage');
            $table->string('status');
            $table->string('payment_picture')->nullable();;
            $table->string('payment_status');
            $table->string('github')->nullable();
            $table->string('website_mockup')->nullable();
            $table->string('proposal')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamp('project_start')->default(now());
            $table->timestamp('project_end')->default(now()->addDays(60));
            $table->timestamps();

            $table->foreign('pricing_id')->references('id')->on('pricings')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
