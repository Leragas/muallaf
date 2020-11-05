<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('national_id')->nullable();
            
            $table->string('ILMU_AKIDAH')->nullable();
            $table->string('ILMU_FEQAH')->nullable();
            $table->string('ILMU_AKHLAK')->nullable();
            $table->string('ILMU_TAFSIR')->nullable();
            $table->string('ILMU_HADIS')->nullable();
            $table->string('ILMU_SIRAH')->nullable();
            $table->string('ILMU_AL_QURAN')->nullable();
            $table->string('ILMU_TOTAL')->nullable();
            
            
            $table->string('KEPIMPINAN_PENGURUSAN')->nullable();
            $table->string('KEPIMPINAN_SUKERELAWAN')->nullable();
            $table->string('KEPIMPINAN_JATIDIRI')->nullable();
            $table->string('KEPIMPINAN_TOTAL')->nullable();
            
            $table->string('SAHSIAH_KEBERSIHAN')->nullable();
            $table->string('SAHSIAH_BERSOSIAL')->nullable();
            $table->string('SAHSIAH_BERMINDA_POSITIVE')->nullable();
            $table->string('SAHSIAH_TOTAL')->nullable();
            
            
            $table->string('KEMAHIRAN_KEBERSIHAN')->nullable();
            $table->string('KEMAHIRAN_BERSOSIAL')->nullable();
            $table->string('KEMAHIRAN_BERMINDA_POSITIVE')->nullable();
            $table->string('KEMAHIRAN_TOTAL')->nullable();
            
            
            $table->string('GRAND_TOTAL')->nullable();
            
            
            
            
                   
            
            
            
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
