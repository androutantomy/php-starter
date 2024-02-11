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
        Schema::create('i_error_application', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->timestamp('error_date');
            $table->text('modules');
            $table->text('controller');
            $table->text('function');
            $table->text('error_line');
            $table->text('error_message');
            $table->text('status');
            $table->text('param');
            $table->string('create_by')->nullable();
            $table->string('update_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_error_application');
    }
};
