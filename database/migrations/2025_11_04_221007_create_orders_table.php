<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('service_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('client_name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_type')->nullable(); // UMKM, startup, dsb
            $table->string('budget_range')->nullable();  // < 1jt, 1-3jt, dll
            $table->string('platform')->nullable();      // IG, TikTok, dsb

            $table->text('goal'); // tujuan kampanye: brand awareness, sales, dll
            $table->enum('status', [
                'pending',
                'in_review',
                'approved',
                'rejected',
                'completed'
            ])->default('pending');

            $table->text('notes')->nullable(); // catatan tambahan dari klien / dari GrowIn
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

