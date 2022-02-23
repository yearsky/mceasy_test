<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggersKaryawan extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::unprepared('
        CREATE TRIGGER `tg_karyawan` BEFORE INSERT ON `table_karyawan`
        FOR EACH ROW BEGIN
        INSERT INTO table1_seq VALUES (NULL);
        SET NEW.nomor_induk = CONCAT("IP06", LPAD(LAST_INSERT_ID(), 3, "0"));
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::unprepared('DROP TRIGGER `tg_karyawan`');
    }
}
