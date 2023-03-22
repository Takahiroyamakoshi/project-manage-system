<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('required_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_info_id')->constrained('project_info');
            $table->foreignId('key_word_id')->constrained('key_words');
            $table->string('experience_years')->nullable();
            $table->timestamp('remark')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('required_skills');
    }
};
