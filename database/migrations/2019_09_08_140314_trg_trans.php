<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrgTrans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER trg_transaksi AFTER INSERT ON `transactions` FOR EACH ROW
                BEGIN
                    UPDATE products SET stock = stock-NEW.jumlah WHERE id = NEW.products_id;
                END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `trg_transaksi`');
    }
}
