<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToShippingAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shipping_adds', function (Blueprint $table) {
            $table->string('shipping_add_street',200)->nullable(false)->default(null);
            $table->string('shipping_add_city',50)->nullable(false)->default(null);
            $table->string('shipping_add_state',20)->nullable(false)->default(null);
            $table->string('shipping_add_postalcode')->nullable(false)->default(null);
            $table->string('shipping_add_country')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shipping_adds', function (Blueprint $table) {
            $table->dropColumn('shipping_add_street','shipping_add_city','shipping_add_state','shipping_add_postalcode', 'shipping_add_country');
        });
    }
}
