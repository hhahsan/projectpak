<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('periode_id');
            $table->foreign('periode_id')
            ->references('id')->on('periode')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->string('pendidikan_terakhir');
            $table->string('jurusan');
            $table->string('tahun_lulus', 10);
            $table->string('pangkat_golongan');
            $table->date('tmt');
            $table->string('gol_bulan');
            $table->string('gol_tahun');
            $table->date('awal_penilaian');
            $table->string('jenis_guru');
            $table->string('tugas');
            $table->string('alamat_sekolah');
            $table->string('kec_sekolah');
            $table->string('kab_sekolah');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
}
