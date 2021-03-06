<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1)
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name', 255);
            $table->string('email', 100)->nullable();
            $table->string('phone', 20);
            $table->text('facebook')->nullable();
            $table->text('other_sns_account')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('lead_source', 255);
            $table->timestamps();
            $table->integer('updated_by')->nullable();
        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
