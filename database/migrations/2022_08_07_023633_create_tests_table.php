<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('category_id')->nullable();
            $table->longText('description')->nullable();
            $table->string('test_code')->nullable();
            $table->json('disorders')->nullable();
            $table->string('turnaround')->nullable();
            $table->string('preferred_specimen')->nullable();
            $table->string('alternate_specimens')->nullable();
            $table->json('genes')->nullable();
            $table->string('color')->nullable();
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
        Schema::dropIfExists('tests');
    }
}
