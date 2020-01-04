<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_type');
            $table->string('name');
            $table->string('business_name');
            $table->integer('contact_id')->nullable();
            $table->integer('tax_number')->nullable();
            $table->integer('opening_balance')->nullable();
            $table->string('pay_term')->nullable();
            $table->string('customer_group')->nullable();
            $table->string('credit_limit')->nullable();
            $table->string('email');
            $table->integer('mobile');
            $table->integer('alternate_contact_number')->nullable();
            $table->integer('landline')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('landmark')->nullable();
            $table->integer('custom_field_1')->nullable();
            $table->integer('custom_field_2')->nullable();
            $table->integer('custom_field_3')->nullable();
            $table->integer('custom_field_4')->nullable();
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
        Schema::dropIfExists('contact_suppliers');
    }
}
