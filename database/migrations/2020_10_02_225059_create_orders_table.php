<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('reference', 8);
            $table->dicimal('shipping');
            $table->dicimal('total');
            $table->dicimal('tax');
            $table->enum('payment', [
                'carte',
                'mandat',
                'virement',
                'cheque'
            ]);
            $table->string('purchase_order',100)->nullable();
            $table->boolean('pick')->default(false);
            $table->integer('invoice_id')->nullable();
            $table->string('invoice_number',40)->nullable();
            $table->foreignId('state_id')->constrainted()->onDelete('cascade');
            $table->foreignId('user_id')->constrainted()->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
