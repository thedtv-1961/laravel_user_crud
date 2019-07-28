<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
//            DB::statement('ALTER TABLE roles ADD FULLTEXT `name` (`name`)');
//            DB::statement('ALTER TABLE roles ADD FULLTEXT `search` (`name`)');
//            DB::statement('ALTER TABLE roles ENGINE = MyISAM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
//            DB::statement('ALTER TABLE roles DROP INDEX name');
        });
    }
}
