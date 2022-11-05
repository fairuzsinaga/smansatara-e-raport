<?php

use App\Models\Raport;
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
        Schema::create('raport_mapels', function (Blueprint $table) {
            $table->foreignIdFor(Raport::class)->cascadeOnDelete();
            $table->string('mapel');
            $table->integer('nilai')->unsigned();
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
        Schema::dropIfExists('raport_mapels');
    }
};
