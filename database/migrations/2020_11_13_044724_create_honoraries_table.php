<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHonorariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('honoraries', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id');
            
              $table->text('fullname');
              $table->text('Regulations');
              $table->text('nationality');
              $table->text('gender');
         
              $table->text('IcNo');
              $table->text('edulevel');
             
              $table->text('SalaryFirst');    
              $table->text('MobileNumber');
              $table->text('LandlineNumber');
              $table->text('email');
              $table->text('clubtasks');
             


              
              $table->text('currentaddress');
              $table->text('Currentwork')->nullable();
              $table->text('CurrentPosition')->nullable();
              $table->text('Currentworkaddress')->nullable();
              $table->text('Previouswork')->nullable();
              $table->text('Previouspositions')->nullable();
              $table->text('Scientificliterature')->nullable();
              $table->text('Communityposts')->nullable();
              $table->text('Otherachievements')->nullable();
              $table->text('SkillsAbilities')->nullable();
              $table->text('additionaltask')->nullable();
             $table->text('Membershiptype');
              
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
        Schema::dropIfExists('honoraries');
    }
}
