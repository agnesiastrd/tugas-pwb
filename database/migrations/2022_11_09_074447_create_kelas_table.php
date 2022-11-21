<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('kelas')) {
        Schema::create('kelas', function (Blueprint $table) {

            $table->id();
            //nomor_induk_siswa . . create field NIS as integer data type
            $table->string('nama_kelas');
            //nama...create nama as varchar data type with length character 100
            $table->string('jurusan');
            //kkkkkk
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}