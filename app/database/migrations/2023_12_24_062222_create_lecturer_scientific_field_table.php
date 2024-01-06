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
        Schema::create('scientific_field_user', function (Blueprint $table) {
            $table->string('scientific_field_code');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('scientific_field_code')
                ->references('code')
                ->on('scientific_fields')
                ->onDelete('cascade');

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
        Schema::dropIfExists('scientific_field_user');
    }
};
