<?php

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
        Schema::create('source_types', function (Blueprint $table) {
            $source = ['mail'=>"email",
                        'phone'=> "phone",
                       'online'=> "online",
                        'apps'=>"app"];
            $table->bigIncrements('id');
            $table->enum('source_info', array_keys($source));
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
        Schema::dropIfExists('source_types');
    }
};
