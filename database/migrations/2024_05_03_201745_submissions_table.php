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
        //
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('occupation');
            $table->string('institute')->nullable();
            $table->string('contact_no');
            $table->string('whatsapp_number')->nullable();
            $table->string('facebook_profile')->nullable();
            $table->text('reason');
            $table->string('facebook_business_profile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('submissions');
    }
};
