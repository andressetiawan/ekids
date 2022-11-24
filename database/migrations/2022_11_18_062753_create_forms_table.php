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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->enum("gender", ["Laki-laki", "Perempuan"]);
            $table->string("class");
            $table->date("dateOfBirth");
            $table->enum("phoneCategory", ["Orang tua", "Anak"]);
            $table->string("phoneNumber");
            $table->boolean("isVerify")->default(false);
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
        Schema::dropIfExists('forms');
    }
};
