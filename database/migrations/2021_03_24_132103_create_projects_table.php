<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->decimal('FINANCIAL_CONTRACT_VALUE');
            $table->decimal('FINANCIAL_COST');
            $table->string('FINANCIAL_BILLING_STATUS');
            $table->string('FINANCIAL_OUTSTANDING_PAYMENT');
            $table->string('SEO_PDF');
            $table->string('PROJECT_COMPLIANCE');
            $table->string('PROJECT_MA_REPORT');
            $table->string('GANTT_CHART_FILE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
