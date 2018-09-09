<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaidToUsers extends Migration
{
    
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('city');
            $table->integer('zip');
            $table->string('father_name');
            $table->string('mother_name');
            $table->integer('phone');
            });
    }

    
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('zip');
            $table->dropColumn('father_name');
            $table->dropColumn('mother_name');
            $table->dropColumn('phone');
        });
    }
}
