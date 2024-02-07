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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('marital_status', ['MARRIED', 'SINGLE', 'DIVORCED']);
            $table->string('partner_name')->nullable();
            $table->string('partner_occupation')->nullable();
            $table->string('partner_nip')->nullable();
            $table->string('kk_image_path');
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
        Schema::dropIfExists('families');
    }
};
