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
        Schema::create('banners', function (Blueprint $table) {
            $table->id(); // auto-incrementing ID
            $table->string('image'); // column for storing the banner image URL/path
            $table->string('title'); // column for storing the title of the banner
            $table->text('description')->nullable(); // optional description for the banner
            $table->enum('status', ['active', 'inactive'])->default('active'); // status to show whether the banner is active or not
            $table->timestamps(); // created_at and updated_at columns
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
