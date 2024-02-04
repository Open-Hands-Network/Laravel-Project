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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("name");
            $table->text("description"); //Used text() instead of string() for larger storage.
            $table->string("type"); //Donate or Volunteer or Both
            $table->string("volunteer_donation");
            $table->string("category");
            $table->string("contact_phone"); //Used string() instead of numeric type to avoid issues.
            $table->boolean("isVerified");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
