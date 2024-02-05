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
        Schema::create('address_contact_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('address_contact_id');
            $table->string('file_path');
            $table->string('file_name');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('address_contact_id')
                ->references('id')
                ->on('address_contacts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_contact_documents');
    }
};
