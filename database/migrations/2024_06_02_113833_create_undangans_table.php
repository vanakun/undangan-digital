<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengantin_pria');
            $table->string('nama_pengantin_pria_lengkap');
            $table->string('nama_ortu_pria');
            $table->string('foto_pengantin_pria')->nullable();

            $table->string('nama_pengantin_wanita');
            $table->string('nama_pengantin_wanita_lengkap');
            $table->string('nama_ortu_wanita');
            $table->string('foto_pengantin_wanita')->nullable();

            $table->string('background_foto')->nullable();
            $table->string('background_foto_kedua')->nullable();
            // Tambahkan kolom tanggal_pernikahan
            $table->date('tanggal_pernikahan')->nullable();
            $table->decimal('lokasi_pernikahan_lat', 10, 7);
            $table->decimal('lokasi_pernikahan_lng', 10, 7);
            $table->string('nama_jalan');
            $table->time('jam_resepsi');
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
        Schema::dropIfExists('undangans');
    }
}
