<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('id_num')->nullable();
            $table->enum('profession', ['worker', 'businessman', 'both']);
            $table->timestamp('worked_since')->nullable();
            $table->string('paid_by')->nullable();
            $table->string('yanglaobaoxian')->nullable();
            $table->string('gongjijin')->nullable();
            $table->string('qitabaoxian')->nullable();
            $table->string('fangchan')->nullable();
            $table->string('shenyileixin')->nullable();
            $table->string('jinyinshijian')->nullable();
            $table->string('gerenzhangu')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('salary')->nullable();
            $table->unsignedInteger('turnover')->nullable();
            $table->unsignedInteger('amount');
            $table->enum('status', ['pending', 'passed', 'failed'])->default('pending');
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
        Schema::dropIfExists('applies');
    }
}
