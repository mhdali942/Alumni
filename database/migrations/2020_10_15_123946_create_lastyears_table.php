<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastyearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lastyears', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id');
            
              $table->text('fullname');
              $table->text('nationality');
              $table->text('gender');
              $table->text('refrenceNumber');
              $table->text('faculty');
              $table->text('edulevel');
              $table->text('leanringmode');
              $table->text('SalaryFirst');    
              $table->text('MobileNumber');
              $table->text('LandlineNumber');
              $table->text('email');
              $table->text('clubtasks');
                 $table->integer('amount')->default('0');
              $table->tinyinteger('payment_status')->default('0');
              
               $table->text('paymenttype');

              $table->text('Subspecialty');
              $table->text('currentaddress');
              $table->text('Currentwork')->nullable();
              $table->text('CurrentPosition')->nullable();
              $table->text('Currentworkaddress')->nullable();
            
              $table->text('Scientificliterature')->nullable();
              $table->text('Communityposts')->nullable();
              $table->text('Otherachievements')->nullable();
              $table->text('SkillsAbilities')->nullable();
              $table->text('additionaltask')->nullable();
        
              $table->text('Membershiptype');
              $table->text('termsCondtions');
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
        Schema::dropIfExists('lastyears');
    }
}
