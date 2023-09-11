<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #追記
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            
            'name'=>'abc',
            'email'=>'fdpanfpeq@gmail.com',
            'password'=> Hash::make('qwer1234'),
            ]);
            
        DB::table('users')->insert([
        
            'name'=>'def',
            'email'=>'degds789@gmail.com',
            'password'=> Hash::make('1234qwer'),
            ]);
    }
}
