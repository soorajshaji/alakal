<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();;
            $table->string('mid')->nullable();;
            $table->string('age')->nullable();;
            $table->string('gender')->nullable();;
            $table->string('phone_number')->nullable();;
            $table->string('whatsapp_number')->nullable();;
            $table->string('email')->nullable();;
            $table->text('family_members')->nullable();;
            //$table->string('month_year')->nullable();;
            //$table->string('contribution')->nullable();;
            //$table->string('donation')->nullable();;
            //$table->text('description')->nullable();
            $table->longtext('contribution')->nullable();
            $table->text('details')->nullable();
            $table->text('details2')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
