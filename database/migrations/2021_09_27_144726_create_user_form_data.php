<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFormData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name');
            $table->string('commodity');
            $table->string('type');
            $table->string('phone');
            $table->string('from');
            $table->string('to');
            $table->string('email');
            $table->string('load');
            $table->string('shipment');
            $table->text('Notations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_form_data');
    }
}
