<?php

use App\Models\Jurusan;
use App\Models\Mapel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel_jurusans', function (Blueprint $table) {
            $table->foreignIdFor(Mapel::class)->cascadeOnDelete();
            $table->foreignIdFor(Jurusan::class)->cascadeOnDelete();
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
        Schema::dropIfExists('mapel_jurusans');
    }
};
