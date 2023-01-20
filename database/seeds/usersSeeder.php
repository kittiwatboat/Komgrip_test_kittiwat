<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ [
            'username'=> "joseph123",
            'password'=> Hash::make('1234eph'),
            'first_name'=>"Joseph",
            'last_name'=>"Holden",
            'positons'=>"1",
        ],[
            'username'=> "jasmine567",
            'password'=> Hash::make('7890jas'),
            'first_name'=>"Jasmine",
            'last_name'=>"Glover",
            'positons'=>"2",
        ],
    [
        'username'=> "jasmine567",
        'password'=> Hash::make('7890jas'),
        'first_name'=>"Jasmine",
        'last_name'=>"Glover",
        'positions'=>"2",
    ],[
        'username'=> "barbara234",
        'password'=> Hash::make('554abc'),
        'first_name'=>"Barbara",
        'last_name'=>"Estrada",
        'positions'=>"3",
    ],[
        'username'=> "tilda007",
        'password'=> Hash::make('til123'),
        'first_name'=>"Tilda",
        'last_name'=>"Padilla",
        'positions'=>"4",
    ]]);
    }
}
