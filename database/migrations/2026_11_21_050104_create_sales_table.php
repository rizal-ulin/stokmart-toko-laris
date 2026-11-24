<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete();
            $table->string('transaction_code', 50)->unique();
            $table->dateTime('transaction_date');
            $table->decimal('total', 12, 2);
            $table->enum('payment_method', ['cash', 'transfer']);
            $table->decimal('amount_received', 12, 2);
            $table->decimal('change_amount', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
