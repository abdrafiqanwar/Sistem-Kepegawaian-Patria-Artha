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
        Schema::create('lecturer_address_contact', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('email');
            $table->string('address');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('sub_village')->nullable(); // dusun
            $table->string('village')->nullable(); // desa
            $table->string('city_discrict_sub_district')->nullable(); // kota, kabupaten, kecamatan
            $table->string('postal_code')->nullable();
            $table->string('home_phone_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('reason_for_rejection')->nullable();
            $table->enum('is_accepted', ['ACCEPTED', 'REJECTED', 'PENDING'])->default('PENDING');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturer_address_contact');
    }
};
