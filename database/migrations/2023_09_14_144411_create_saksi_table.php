<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('saksi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nik', 16);
            $table->string('nama', 16);
            $table->string('nohp', 18);
            $table->string('email')->nullable();
            $table->text('alamat');
            $table->longText('iden');
            $table->string('kode_provinsi', 3);
            $table->string('kode_kabupaten', 5);
            $table->string('kode_kecamatan', 7);
            $table->string('kode_kelurahan', 15);
            $table->tinyInteger('tps');
            $table->bigInteger('created')->unsigned();
            $table->bigInteger('trx')->unsigned();
            $table->decimal('lat');
            $table->decimal('longitude');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saksi');
    }
};
