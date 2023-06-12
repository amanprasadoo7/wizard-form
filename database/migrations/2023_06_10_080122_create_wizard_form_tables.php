<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWizardFormTables extends Migration
{
    public function up()
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('field1');
            $table->string('field2');
            $table->string('field3');
            $table->string('contact_number')->unique();
            $table->string('field4');
            $table->string('field5');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_data');
    }
}
