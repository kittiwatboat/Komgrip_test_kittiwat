<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class positions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position')->insert(
            array("position"=>"Designer"),
            array("position"=>"Web Developer"),
            array("position"=>"Developer"),
            array("position"=>"System Analyst"),

        );
    }
}
