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
        Schema::create('lecturer_functional_document', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lecturer_functional_id');
            $table->string('file_name');
            $table->string('file_name_original');
            $table->timestamps();

            $table->foreign('lecturer_functional_id')
                ->references('id')
                ->on('lecturer_functional')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturer_functional_document');
    }
};
