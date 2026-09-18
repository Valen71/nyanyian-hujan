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
    Schema::create('customer_messages', function (Blueprint $table) {
        $table->id();

        $table->string('customer_name');

        $table->string('customer_email')->nullable();

        $table->string('customer_phone')->nullable();

        $table->text('message');

        $table->enum('status', [
            'unread',
            'read',
            'replied'
        ])->default('unread');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_messages');
    }
};
