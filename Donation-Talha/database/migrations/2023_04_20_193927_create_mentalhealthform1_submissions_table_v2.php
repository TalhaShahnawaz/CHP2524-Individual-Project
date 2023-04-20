<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentalhealthform1SubmissionsTableV2 extends Migration
{
    public function up()
    {
        Schema::create('mentalhealthform1', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('emergency_mobile');
            $table->string('current_location');
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentalhealthform1');
    }
}
