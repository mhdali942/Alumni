<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
              $table->id();
              $table->foreignId('user_id');
            
              $table->string('fullname');
              $table->string('nationality');
              $table->string('gender');
              $table->string('refrenceNumber');
              $table->string('faculty');
              $table->string('edulevel');
              $table->string('leanringmode');
              $table->string('SalaryFirst');    
              $table->string('MobileNumber');
              $table->string('LandlineNumber');
              $table->string('email');
              $table->string('clubtasks');
              $table->integer('amount')->default('0');
              $table->tinyinteger('payment_status')->default('0');

             
          
              $table->text('paymenttype');
           
              $table->string('upgrade_request')->nullable();
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
        Schema::dropIfExists('alumnis');
    }
}
