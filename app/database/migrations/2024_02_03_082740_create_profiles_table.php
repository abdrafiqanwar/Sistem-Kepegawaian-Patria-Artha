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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nidn');
            $table->string('full_name');
            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('mother_name');
            $table->string('ktp_image_path');
            $table->string('kk_image_path');
            $table->string('ktp_name');
            $table->string('kk_name');
            $table->enum('is_accepted', ['ACCEPTED', 'REJECTED', 'PENDING'])->default('PENDING');
            $table->text('reason_for_rejection')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
