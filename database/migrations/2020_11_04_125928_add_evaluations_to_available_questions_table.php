<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEvaluationsToAvailableQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('available_questions', function (Blueprint $table) {
            $table->unsignedBigInteger('evaluation_id')->nullable();
            $table->foreign('evaluation_id')
                ->references('id')->on('evaluations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('available_questions', function (Blueprint $table) {
            //
        });
    }
}