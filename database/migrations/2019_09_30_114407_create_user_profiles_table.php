<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {

            $table->string('avatar')->nullable();
            $table->integer('id')->unique();
            $table->string('name');
            $table->string('mail');
            $table->string('owner');
            $table->string('country')->nullable();
            $table->string('district')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('sex');
            $table->date('birthdate');
            $table->integer('age')->nullable();
            $table->string('religion');
            $table->string('maritalstatus');
            $table->float('height')->nullable();
            $table->string('physicalstatus')->nullable();
            $table->string('familyvalue')->nullable();
            $table->string('familystatus')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('educationlevel')->nullable();
            $table->string('fieldofeducation')->nullable();
            $table->string('employedin')->nullable();
            $table->string('annualincome')->nullable();
            $table->string('ancestralfamilyorigin')->nullable();
            $table->string('motheroccupation')->nullable();
            $table->string('fatheroccupation')->nullable();
            $table->string('noofbrother')->nullable();
            $table->string('noofmarriedbrother')->nullable();
            $table->string('noofsister')->nullable();
            $table->string('noofmarriedsister')->nullable();
            $table->integer('weight')->nullable();
            $table->string('bodytype')->nullable();
            $table->string('complexion')->nullable();
            $table->string('spokenlanguage')->nullable();
            $table->string('eatinghabit')->nullable();

            /*$table->string('drinkinghabit')->nullable();
            $table->string('smokinghabit')->nullable();
            $table->string('interest')->nullable();*/

            $table->string('hobbies')->nullable();
            $table->string('favourite')->nullable();



            $table->string('psex');
            $table->string('pagefrom');
            $table->string('pageto');
            $table->string('pmaritalstatus');
            $table->string('preligion');

            $table->string('mreligious');
            $table->string('mpreligious');
            $table->string('memployment');
            $table->string('mpemployment');
            $table->string('mlifestyle');
            $table->string('mplifestyle');
            $table->string('mfamily');
            $table->string('mpfamily');
            $table->string('mtravelling');
            $table->string('mptravelling');
            $table->string('mmusic');
            $table->string('mpmusic');
            $table->string('mgame');
            $table->string('mpgame');
            $table->string('msmoking');
            $table->string('mpsmoking');
            $table->string('mdrinking');
            $table->string('mpdrinking');

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
        Schema::dropIfExists('user_profiles');
    }
}
