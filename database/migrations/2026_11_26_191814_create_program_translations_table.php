<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')
                ->constrained('programs')
                ->cascadeOnDelete();
            $table->string('locale', 10)->index();
            $table->string('title', 200);
            $table->string('department', 150);
            $table->text('description');
            $table->timestamps();

            $table->unique(['program_id', 'locale']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('program_translations');
    }
};
