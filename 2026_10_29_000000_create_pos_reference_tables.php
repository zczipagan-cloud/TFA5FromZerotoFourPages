<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pos_reference_records', function (Blueprint $table) {
            $table->id();
            $table->string('record_type');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('role_or_phone')->nullable();
            $table->string('status')->default('Active');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('pos_reference_records'); }
};
