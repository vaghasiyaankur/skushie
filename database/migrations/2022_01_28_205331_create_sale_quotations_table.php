<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_quotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('customer_address_book_id')->nullable();
            $table->unsignedBigInteger('warehouse_id')->nullable();
            $table->string('desc')->nullable();
            $table->float('payable')->nullable();
            $table->unsignedBigInteger('coupon_setting_id')->nullable();
            $table->float('discount')->nullable();
            $table->unsignedBigInteger('tax_id')->nullable();
            $table->float('tax_amount')->nullable();
            $table->float('amount_paid')->nullable();
            $table->float('due_amount')->nullable();
            $table->date('sale_date')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('customer_address_book_id')->references('id')->on('customer_address_book');
            $table->foreign('coupon_setting_id')->references('id')->on('coupon_setting');
            $table->foreign('warehouse_id')->references('id')->on('warehouses');
            $table->foreign('tax_id')->references('id')->on('taxes');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_qoutations');
    }
}
