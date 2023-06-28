<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;





class Quiz_yearsSeeder extends Seeder
{
   public function run()
    {
         DB::table('quiz_years')->insert([
              'name' => '第25回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第26回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第27回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第28回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第29回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);

        DB::table('quiz_years')->insert([
              'name' => '第30回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第31回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第32回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第33回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第34回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第35回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
        DB::table('quiz_years')->insert([
              'name' => '第36回',
              'created_at' => new DateTime(),
              'updated_at' => new DateTime(),
              'deleted_at' => Null,
       ]);
    }
}
