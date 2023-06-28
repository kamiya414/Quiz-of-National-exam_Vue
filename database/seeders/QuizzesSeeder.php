<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class QuizzesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
        DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-17',
                'content' => 'ヒトの細胞に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-18',
                'content' => '糖質に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-19',
                'content' => 'ヒトの mRNA に関する記述である。最も適当なのはどれか。 1 つ選べ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-20',
                'content' => '生体エネルギーと代謝に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-21',
                'content' => '脂質の代謝に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-22',
                'content' => '個体の恒常性に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-23',
                'content' => '炎症と腫瘍に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-24',
                'content' => '症候に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-25',
                'content' => '治療に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-26',
                'content' => '栄養・代謝に関する生理活性物質とその働きの組合せである。最も適当なのはどれか。 1 つ選',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-27',
                'content' => '消化器系に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-28',
                'content' => '消化器疾患と、頻度の高い原因の組合せである。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-29',
                'content' => '循環器系の構造と機能に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-30',
                'content' => '循環器疾患に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-31',
                'content' => '腎・尿路系の構造と機能に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-32',
                'content' => '腎臓に作用するホルモンに関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-33',
                'content' => '内分泌疾患と血液検査所見の組合せである。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-34',
                'content' => '交感神経の興奮で起こる反応である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-35',
                'content' => '呼吸器疾患に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-36',
                'content' => '運動器系に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-37',
                'content' => '妊娠糖尿病に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-38',
                'content' => '血球に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-39',
                'content' => '血液疾患に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-40',
                'content' => '免疫に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-41',
                'content' => '自己免疫疾患に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 12,
                'quiz_category_id' => 2,
                'title' =>'36-42',
                'content' => '感染症に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,

                # 分野、年度変更
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-43',
                'content' => '果実類に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-44',
                'content' => '藻類に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-45',
                'content' => '牛乳に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-46',
                'content' => '嗜好飲料に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-47',
                'content' => '食品中の水に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-48',
                'content' => '食品の物性に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-49',
                'content' => '食品とその呈味成分に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-50',
                'content' => '食品中のビタミンに関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-51',
                'content' => '食品と主な香気・におい成分の組合せである。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-52',
                'content' => '食品安全委員会に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-53',
                'content' => '細菌性食中毒に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-54',
                'content' => 'ノロウイルスとそれによる食中毒に関する記述である。最も適当なのはどれか。 1 つ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-55',
                'content' => '寄生虫とその感染源の組合せである。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-56',
                'content' => '食品中の有害物質に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-57',
                'content' => '食品添加物に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-58',
                'content' => '食品表示基準に基づく一般用加工食品の表示に関する記述である。誤っているのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-59',
                'content' => '特別用途食品および保健機能食品に関する記述である。最も適当なのはどれか。 1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-60',
                'content' => '特定保健用食品の関与成分と保健の用途の組合せである。誤っているのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-61',
                'content' => '穀類の加工品に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-62',
                'content' => '畜肉の加工および加工品に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-63',
                'content' => '食品の保存に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-64',
                'content' => '調理器具・機器に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-65',
                'content' => '嗜好性を高めるための調理に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-66',
                'content' => '酢による食品の色の変化に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('quizzes')->insert([
                'quiz_year_id' => 11,
                'quiz_category_id' => 3,
                'title' =>'35-67',
                'content' => '代表的な料理の献立の構成に関する記述である。最も適当なのはどれか。 1 つ選べ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
   }
}
