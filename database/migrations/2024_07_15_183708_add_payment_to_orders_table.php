<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->string('payment_bank');
            $table->string('payment_owner');
            $table->string('payment_norek');
            $table->string('payment_date');
            $table->text('payment_images');
            $table->foreignUuid('paid_user_id');
            $table->string('paid_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->dropColumn('payment_bank');
            $table->dropColumn('payment_owner');
            $table->dropColumn('payment_norek');
            $table->dropColumn('payment_date');
            $table->dropColumn('payment_images');
            $table->foreignUuid('paid_user_id');
            $table->string('paid_date');
        });
    }
}
