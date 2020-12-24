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
            $table->string('pendidikan_terakhir', 15)->nullable();
            $table->string('jurusan', 50)->nullable();
            $table->string('tahun_lulus', 10)->nullable();
            $table->string('pangkat_golongan',50)->nullable();
            $table->date('tmt')->nullable();
            $table->string('gol_bulan', 15)->nullable();
            $table->string('gol_tahun', 15)->nullable();
            $table->date('awal_penilaian')->nullable();
            $table->string('jenis_guru', 30)->nullable();
            $table->string('tugas', 30)->nullable();
            $table->string('alamat_sekolah', 30)->nullable();
            $table->string('kec_sekolah', 30)->nullable();
            $table->string('kab_sekolah', 30)->nullable();
            $table->integer('status')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('pengajuan');
    }
}
