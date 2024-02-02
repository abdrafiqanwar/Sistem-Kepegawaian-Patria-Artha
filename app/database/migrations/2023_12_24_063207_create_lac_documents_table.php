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
        Schema::create('lac_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lac_id');
            $table->string('file_doc');
            $table->string('file_name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('document_type_id');
            $table->timestamps();

            $table->foreign('lac_id')
                ->references('id')
                ->on('lecturer_address_contact')
                ->onDelete('cascade');

            $table->foreign('document_type_id')
                ->references('id')
                ->on('document_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lac_documents');
    }
};
