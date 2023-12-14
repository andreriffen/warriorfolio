<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('dribbble')->nullable();
            $table->string('facebook')->nullable();
            $table->string('github')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('medium')->nullable();
            $table->string('twitter')->nullable();
            $table->string('about')->nullable();
            $table->string('avatar')->nullable();
            $table->string('skills')->nullable();
            $table->string('job_position')->nullable();
            $table->string('localization')->nullable();
            $table->boolean('is_open_to_work')->default(false);
            $table->string('document')->nullable();
            $table->boolean('is_downloadable')->default(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
