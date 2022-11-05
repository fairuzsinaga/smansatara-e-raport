<?php

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('guru_mapels', function (Blueprint $table) {
            $table->foreignIdFor(Mapel::class)->cascadeOnDelete();
            $table->foreignIdFor(Guru::class)->cascadeOnDelete();
            $table->foreignIdFor(Kelas::class)->cascadeOnDelete();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru_mapels');
    }
};
