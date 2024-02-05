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
        Schema::create('citizenship_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citizenship_id');
            $table->string('file_path');
            $table->string('file_name');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('citizenship_id')
                ->references('id')
                ->on('citizenships')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizenship_documents');
    }
};
