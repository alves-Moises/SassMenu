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
        Schema::create('owner', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('tel');
            $table->unsignedBigInteger('establishment_id');
            $table->foreign('establishment_id')
                ->references('id')
                ->on('establishment')
                ->onDelete('cascade');

            $table->timestamps();
        });

        // schema::create('Establishment', function (Blueprint $table){
        //     $table->id()->unique()->autoincrement(  );
        //     $table->string('name');
        //     $table->string('adress');
        //     $table->string('tel');
        //     $table->string('cnpj');
        // });

        // Schema::create('Order', function (Blueprint $table){
        //     //TODO
        // });

        // schema::create('MenuItems', function (Blueprint $table){
        //     //TODO
        // });

        // schema::crete('OrderItems', function (Blueprint $table){
        //     //TODO
        // });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner');
    }
};
