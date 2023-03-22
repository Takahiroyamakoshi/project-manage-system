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
        Schema::create('attend_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_info_id')->constrained('project_info');
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('attend_propriety')->nullable();
            $table->date('state_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('hold_reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attend_info');
    }
};
