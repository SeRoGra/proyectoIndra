<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProductsTable extends Migrationcd
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
        });

        Schema::table('user_products', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('product_id')->references('id')->on('products');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('user_products', function(Blueprint $table){
            $table->dropForeign('user_products_user_id_foreign');
            $table->dropForeign('user_products_product_id_foreign');
            $table->dropColumn('user_id');
            $table->dropColumn('product_id');
        });

        Schema::dropIfExists('user_products');
    }
}
