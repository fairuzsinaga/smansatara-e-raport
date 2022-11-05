<?php

use App\Models\Siswa;
use App\Models\DataRaport;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DataRaport::class)->cascadeOnDelete();
            $table->foreignIdFor(Siswa::class)->cascadeOnDelete();
            $table->string('kelas');
            $table->string('kepala_sekolah');
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
        Schema::dropIfExists('raports');
    }
};
