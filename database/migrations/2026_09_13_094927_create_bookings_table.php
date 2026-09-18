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
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();

        $table->string('booking_code')->unique();

        $table->foreignId('ship_id')
            ->constrained('ships')
            ->cascadeOnDelete();

        $table->string('customer_name');
        $table->string('customer_email');
        $table->string('customer_phone');

        $table->date('booking_date');
        $table->time('booking_time');

        $table->unsignedInteger('passengers');

        $table->string('destination');
        $table->text('notes')->nullable();

        $table->decimal('total_price', 15, 2);

        $table->enum('status', [
            'pending',
            'confirmed',
            'completed',
            'cancelled'
        ])->default('pending');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
