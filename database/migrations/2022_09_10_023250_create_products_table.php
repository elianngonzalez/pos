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
        Schema::create('products', function (Blueprint $table) {
            
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->string('name')->unique();;
            $table->decimal('stock')->default(0);
            $table->decimal('alert')->default(0);
            $table->string('image');
            $table->decimal('sell_price');
            $table->enum('status', ['ACTIVE' ,'DEACTIVATED','DANGER'])->default('ACTIVE')->comment('estado del producto');
            
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers');
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
        Schema::dropIfExists('products');
    }
};
