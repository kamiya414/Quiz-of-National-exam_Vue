<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #追記
use DateTime; #を追記

class ChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
         DB::table('choices')->insert([
                'quiz_id' => '36-17',
                'content' => '平滑筋細胞は、随意筋を構成する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-17',
                'content' => '脂肪細胞は、レプチンを分泌する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-17',
                'content' => '肥満細胞は、IgE を産生する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-17',
                'content' => '形質細胞は、T 細胞から分化する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-17',
                'content' => 'マクロファージは、好中球から分化する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-18',
                'content' => 'ガラクトースは、非還元糖である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
           DB::table('choices')->insert([
                'quiz_id' => '36-18',
                'content' => 'フルクトースは、ケトン基をもつ。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
           DB::table('choices')->insert([
                'quiz_id' => '36-18',
                'content' => 'スクロースは、グルコース 2 分子からなる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
           DB::table('choices')->insert([
                'quiz_id' => '36-18',
                'content' => 'アミロースは、分枝状構造をもつ。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
           DB::table('choices')->insert([
                'quiz_id' => '36-18',
                'content' => 'グリコーゲンは、ヘテロ多糖である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
           DB::table('choices')->insert([
                'quiz_id' => '36-19',
                'content' => '核小体で生成される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-19',
                'content' => 'チミンを含む。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-19',
                'content' => 'コドンをもつ。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-19',
                'content' => 'プロモーター領域をもつ。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-19',
                'content' => 'mRNA の遺伝情報は、核内で翻訳される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-20',
                'content' => '電子伝達系は、コエンザイム A（CoA）を含む。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-20',
                'content' => '電子伝達系では、二酸化炭素が産生される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-20',
                'content' => '脱共役たんぱく質（UCP）は、熱産生を抑制する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-20',
                'content' => 'ATP 合成酵素は、基質レベルのリン酸化を触媒する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-20',
                'content' => 'クレアチンリン酸は、高エネルギーリン酸化合物である。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
               DB::table('choices')->insert([
                'quiz_id' => '36-21',
                'content' => 'アラキドン酸は、一価不飽和脂肪酸である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-21',
                'content' => 'オレイン酸は、体内で合成できない。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-21',
                'content' => '腸管から吸収された中鎖脂肪酸は、門脈に入る。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-21',
                'content' => 'キロミクロンは、肝臓から分泌される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-21',
                'content' => 'LDL は、HDL から生成される。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);     
                DB::table('choices')->insert([
                'quiz_id' => '36-22',
                'content' => '副交感神経の興奮は、消化管運動を抑制する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
               DB::table('choices')->insert([
                'quiz_id' => '36-22',
                'content' => '膵液の分泌は、内分泌である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
               DB::table('choices')->insert([
                'quiz_id' => '36-22',
                'content' => '血糖値が上昇すると、グルカゴンの分泌が促進される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
               DB::table('choices')->insert([
                'quiz_id' => '36-22',
                'content' => '自然免疫は、抗原特異的である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
               DB::table('choices')->insert([
                'quiz_id' => '36-22',
                'content' => '体液性免疫は、抗体が関与する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
               DB::table('choices')->insert([
                'quiz_id' => '36-23',
                'content' => '肥大は、炎症の徴候に含まれる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-23',
                'content' => '線維化は、炎症の慢性期より急性期で著しい。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-23',
                'content' => '肉芽腫は、良性腫瘍である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-23',
                'content' => '肉腫は、上皮性腫瘍である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-23',
                'content' => '悪性腫瘍は、浸潤性に増殖する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-24',
                'content' => 'ショックでは、血圧が上昇している。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-24',
                'content' => 'JCS（Japan Coma Scale）は、呼吸機能の指標である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-24',
                'content' => 'チアノーゼは、血中還元ヘモグロビン濃度が低下した時にみられる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-24',
                'content' => '吐血は、気道からの出血である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-24',
                'content' => '黄疸は、血中ビリルビン濃度の上昇による。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-25',
                'content' => '自己血輸血は、緊急手術で行われる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-25',
                'content' => '自己血輸血では、GVHD（移植片対宿主病）がみられる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-25',
                'content' => '血液透析では、腹膜を用いる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-25',
                'content' => '白血球除去療法は、過敏性腸症候群の患者に行う。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '36-25',
                'content' => 'LDL 吸着療法（LDL アフェレーシス）は、家族性高コレステロール血症の患者に行う。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
            DB::table('choices')->insert([
                'quiz_id' => '36-26',
                'content' => '成長ホルモン⇒血糖低下',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-26',
                'content' => 'グレリン⇒ 摂食抑制',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-26',
                'content' => 'ガストリン⇒下部食道括約筋弛緩',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-26',
                'content' => 'インスリン ⇒ グリコーゲン分解',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-26',
                'content' => 'アドレナリン ⇒脂肪分解',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-27',
                'content' => '味覚は、三叉神経により伝えられる。味覚は、三叉神経により伝えられる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-27',
                'content' => '食道は、分節運動により食べ物を胃に運ぶ。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-27',
                'content' => '胃酸分泌は、セクレチンにより促進される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-27',
                'content' => '胆汁酸は、主に回腸で吸収される。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-27',
                'content' => '排便の中枢は、腰髄にある。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                    DB::table('choices')->insert([
                'quiz_id' => '36-28',
                'content' => '食道がん⇒ カンジダ',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-28',
                'content' => '胃潰瘍 ⇒ サルモネラ',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-28',
                'content' => '慢性肝炎⇒ ヘリコバクター・ピロリ',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-28',
                'content' => '胆石症 ⇒ B 型肝炎ウイルス',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-28',
                'content' => '急性膵炎 ⇒  アルコール',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                  DB::table('choices')->insert([
                'quiz_id' => '36-30',
                'content' => '心筋は、平滑筋である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-29',
                'content' => '冠状動脈は、上行大動脈から分岐する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-29',
                'content' => '肺動脈を流れる血液は、動脈血である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-29',
                'content' => '動脈の容量は、静脈の容量より大きい。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                   DB::table('choices')->insert([
                'quiz_id' => '36-29',
                'content' => 'リンパ（リンパ液）は、鎖骨下動脈に流入する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-30',
                'content' => '仮面高血圧では、家庭血圧は正常である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-30',
                'content' => '狭心症では、心筋壊死が生じる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-30',
                'content' => '深部静脈血栓症は、肺塞栓のリスク因子である。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-30',
                'content' => '右心不全では、肺うっ血が生じる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-30',
                'content' => 'ラクナ伷塞は、太い血管の閉塞による脳伷塞である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-31',
                'content' => 'クレアチニンは、糸球体で濾過される。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-31',
                'content' => 'イヌリンは、尿細管で再吸収される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-31',
                'content' => 'ヘンレ係蹄は、遠位尿細管と集合管との間に存在する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-31',
                'content' => 'レニンは、尿管から分泌される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-31',
                'content' => 'エリスロポエチンは、膀胱から分泌される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-32',
                'content' => 'バソプレシンは、水の再吸収を抑制する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-32',
                'content' => 'カルシトニンは、カルシウムの再吸収を促進する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-32',
                'content' => '副甲状腺ホルモン（PTH）は、カルシウムの再吸収を促進する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-32',
                'content' => '心房性ナトリウム利尿ペプチド（ANP）は、ナトリウムの再吸収を促進する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-32',
                'content' => 'アルドステロンは、カリウムの再吸収を促進する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-33',
                'content' => 'バセドウ病 —– 甲状腺刺激ホルモン（TSH）受容体抗体の陽性',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-33',
                'content' => '橋本病 —– LDL コレステロール値の低下',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-33',
                'content' => '原発性アルドステロン症 —– レニン値の上昇',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-33',
                'content' => 'クッシング症候群 —– カリウム値の上昇',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-33',
                'content' => '褐色細胞腫 —– カテコールアミン値の低下',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-34',
                'content' => '瞳孔は、縮小する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-34',
                'content' => '気管支は、収縮する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-34',
                'content' => '肝臓のグリコーゲン分解は、抑制される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-34',
                'content' => '皮膚の血管は、拡張する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-34',
                'content' => '発汗する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-35',
                'content' => '肺がんは、女性に多い。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-35',
                'content' => '気管支喘息は、閉塞性肺障害を呈する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-35',
                'content' => 'COPD の病期は、Ｘ線所見で分類する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-35',
                'content' => 'アスペルギルス肺炎は、ウイルスが原因である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-35',
                'content' => 'ツベルクリン反応は、肺がんの検査である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-36',
                'content' => '骨軟化症は、ビタミン A の欠乏で生じる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-36',
                'content' => '骨基質は、破骨細胞によって産生される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-36',
                'content' => '骨型アルカリフォスファターゼ（BAP）は、骨吸収マーカーである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-36',
                'content' => '尿中デオキシピリジノリンは、骨形成マーカーである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-36',
                'content' => 'YAM（若年成人平均値）は、骨粗鬆症の診断に用いられる。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-37',
                'content' => '「空腹時血糖 126 mg/dL 以上」が、診断基準に含まれる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-37',
                'content' => 'HbA1c 6.5％ 以上」が、診断基準に含まれる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-37',
                'content' => '「妊娠糖尿病の家族歴」が、診断基準に含まれる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-37',
                'content' => '経口血糖降下薬によって治療する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-37',
                'content' => '分娩後の 2 型糖尿病のリスクになる。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                  DB::table('choices')->insert([
                'quiz_id' => '36-38',
                'content' => '赤血球には、ミトコンドリアが存在する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                  DB::table('choices')->insert([
                'quiz_id' => '36-38',
                'content' => '好中球は、抗体を産生する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                  DB::table('choices')->insert([
                'quiz_id' => '36-38',
                'content' => 'B 細胞は、胸腺で成熟する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                  DB::table('choices')->insert([
                'quiz_id' => '36-38',
                'content' => '好酸球は、アレルギー反応に関与する',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                  DB::table('choices')->insert([
                'quiz_id' => '36-38',
                'content' => '血小板には、核が存在する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                  DB::table('choices')->insert([
                'quiz_id' => '36-39',
                'content' => '再生不良性貧血では、造血幹細胞が増加している。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-39',
                'content' => '多発性骨髄腫では、低カルシウム血症が起こる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-39',
                'content' => '悪性貧血は、エリスロポエチン産生低下によって起こる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-39',
                'content' => '急性白血病では、出血傾向がみられる。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-39',
                'content' => '急性白血病では、出血傾向がみられる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-40',
                'content' => '消化管粘膜には、非特異的防御機構が認められる。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-40',
                'content' => 'IgG による免疫は、非特異的防御機構である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-40',
                'content' => 'IgA は、Ⅰ型アレルギーに関与する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-40',
                'content' => 'IgM は、胎盤を通過する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                 DB::table('choices')->insert([
                'quiz_id' => '36-40',
                'content' => '血漿中に最も多く存在する抗体は、IgE である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-41',
                'content' => '全身性エリテマトーデスは、男性に多い。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-41',
                'content' => '全身性エリテマトーデスは、日光浴で寛解する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-41',
                'content' => '1 型糖尿病では、インスリン分泌が亢進する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-41',
                'content' => '強皮症では、レイノー現象がみられる。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-41',
                'content' => 'シェーグレン症候群では、唾液分泌が増加する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-42',
                'content' => '日和見感染とは、感染しても発症しないことである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-42',
                'content' => '潜伏期とは、発症してから治癒するまでの期間である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-42',
                'content' => 'ポリメラーゼ連鎖反応（PCR）法は、病原体由来の DNA を検出する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-42',
                'content' => '垂直感染とは、病原体が輸血によって伝播する感染様式である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
                DB::table('choices')->insert([
                'quiz_id' => '36-42',
                'content' => '耐性菌とは、薬物に対して感受性をもつ細菌である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
               'deleted_at' => Null, 
               ]);
                
             DB::table('choices')->insert([
                'quiz_id' => '35-43',
                'content' => 'りんごの切断面は、リポキシゲナーゼによって褐変する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-43',
                'content' => 'バナナは、ジベレリン処理によって追熟が促進する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-43',
                'content' => '西洋なしは、非クライマクテリック型の果実である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-43',
                'content' => '日本なしは、果肉に石細胞を含む。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-43',
                'content' => 'いちじくは、アクチニジンを含む。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-44',
                'content' => 'わかめは、緑藻類である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-44',
                'content' => 'あまのりの青色色素は、フィコシアニンである。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-44',
                'content' => 'てんぐさを熱水で抽出すると、ゼラチンが得られる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-44',
                'content' => 'こんぶの主なうま味成分は、グアニル酸である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-44',
                'content' => '干しこんぶ表面の白い粉の主成分は、フルクトースである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-45',
                'content' => '炭水化物の大部分は、マルトースである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-45',
                'content' => 'β-ラクトグロブリンは、乳清に含まれている。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-45',
                'content' => 'カゼインは、pH 6.6 に調整すると凝集沈殿する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-45',
                'content' => '脂質中のトリグリセリドの割合は、約 15 ％ である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-45',
                'content' => '市販の牛乳は、生乳に水を添加して製造する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-46',
                'content' => '紅茶は、不発酵茶である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-46',
                'content' => '煎茶の製造における加熱処理は、主に釜炒りである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-46',
                'content' => '茶のうま味成分は、カフェインによる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-46',
                'content' => 'コーヒーの褐色は、主にアミノカルボニル反応による。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-46',
                'content' => 'ココアの製造では、カカオ豆に水を加えて磨砕する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-47',
                'content' => '純水の水分活性は、100 である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-47',
                'content' => '結合水は、食品成分と共有結合を形成している。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-47',
                'content' => '塩蔵では、結合水の量を減らすことで保存性を高める。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-47',
                'content' => '中間水分食品は、生鮮食品と比較して非酵素的褐変が抑制される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-47',
                'content' => '水分活性が極めて低い場合には、脂質の酸化が促進される。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-48',
                'content' => '大豆油は、非ニュートン流体である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-48',
                'content' => 'コンデンスミルクは、擬塑性流動を示す。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-48',
                'content' => 'メレンゲは、チキソトロピーを示す。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-48',
                'content' => '水ようかんは、キセロゲルである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-48',
                'content' => 'マヨネーズは、油中水滴（W/O）型エマルションである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-49',
                'content' => '柿の渋味成分は、オイゲノールである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-49',
                'content' => 'たこのうま味成分は、ベタインである。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-49',
                'content' => 'ヨーグルトの酸味成分は、酒石酸である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-49',
                'content' => 'コーヒーの苦味成分は、ナリンギンである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-49',
                'content' => 'とうがらしの辛味成分は、チャビシンである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-50',
                'content' => 'β-クリプトキサンチンは、プロビタミン A である。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-50',
                'content' => 'ビタミン B2 は、光に対して安定である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-50',
                'content' => 'アスコルビン酸は、他の食品成分の酸化を促進する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-50',
                'content' => 'γ-トコフェロールは、最もビタミン E 活性が高い。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-50',
                'content' => 'エルゴステロールに紫外線が当たることで、ビタミン K が生成される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-51',
                'content' => 'もも —– ヌートカトン',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-51',
                'content' => '淡水魚 —– 桂皮酸メチル',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-51',
                'content' => '発酵バター —– レンチオニン',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-51',
                'content' => '干ししいたけ —– γ-ウンデカラクトン',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-51',
                'content' => 'にんにく —– ジアリルジスルフィド',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-52',
                'content' => '農林水産省に設置されている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-52',
                'content' => '食品衛生法により設置されている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-52',
                'content' => '食品に含まれる有害物質のリスク管理を行う。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-52',
                'content' => '食品添加物の一日摂取許容量（ADI）を設定する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-52',
                'content' => 'リスクコミュニケーションには参加しない。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-53',
                'content' => 'サルモネラ菌は、神経性の毒素を産生する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-53',
                'content' => '黄色ぶどう球菌による食中毒の潜伏期間は、 2 ～ 7 日間である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-53',
                'content' => 'ウェルシュ菌による食中毒の主症状は、血便である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-53',
                'content' => 'カンピロバクター感染症は、ギラン・バレー症候群の原因となる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-53',
                'content' => '腸管出血性大腸菌は、100℃ 3 分間の煮沸では殺菌できない。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-54',
                'content' => '数十から数百個のウイルス量で感染する。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-54',
                'content' => '食中毒が多く発生する時期は、夏季である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-54',
                'content' => 'ヒトからヒトへ感染しない。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-54',
                'content' => '食中毒の予防には、75℃ 1 分間の加熱が推奨されている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-54',
                'content' => '主に二枚貝の貝柱に濃縮される',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-55',
                'content' => 'アニサキス —– コイ',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-55',
                'content' => 'クドア —– ヒラメ',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-55',
                'content' => 'サルコシスティス —– マス',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-55',
                'content' => 'トキソプラズマ —– ホタルイカ',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-55',
                'content' => '有鉤条虫 —– アユ',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-56',
                'content' => 'アフラトキシンを生産するカビ類は、主に亜寒帯に生息している。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-56',
                'content' => 'デオキシニバレノールは、主に貝類に蓄積される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-56',
                'content' => '放射性物質であるヨウ素 131 は、主に骨に沈着する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-56',
                'content' => 'キンメダイは、メチル水銀を蓄積するため、妊婦に対する注意が示されている。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-56',
                'content' => 'ベンゾ［a］ピレンは、生野菜に多く含まれている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-57',
                'content' => '生涯を通じて週に 1 日摂取しても健康に影響が出ない量を、一日摂取許容量（ADI）という。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-57',
                'content' => '無毒性量は、ヒトに対する毒性試験の結果をもとに設定される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-57',
                'content' => '指定添加物は、天然由来の添加物を含まない。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-57',
                'content' => 'サッカリンナトリウムは、甘味づけの目的で添加される。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-57',
                'content' => 'エリソルビン酸は、細菌の増殖抑制の目的で添加される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-58',
                'content' => '品質の劣化が極めて少ないものは、消費期限または賞味期限の表示を省略することができる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-58',
                'content' => '飽和脂肪酸の量の表示は、推奨されている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-58',
                'content' => '100 g 当たりのナトリウム量が 5 mg 未満の食品には、食塩を含まない旨の強調表示ができる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-58',
                'content' => '栄養機能食品では、原材料の栄養成分量から得られた計算値を、機能成分の栄養成分表示に用いることができる。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-58',
                'content' => '卵を原材料に含む場合は、アレルゲンの表示が義務づけられている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-59',
                'content' => '特別用途食品（総合栄養食品）は、健康な成人を対象としている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-59',
                'content' => '特定保健用食品（規格基準型）では、申請者が関与成分の疾病リスク低減効果を医学的・栄養学的に示さなければならない。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-59',
                'content' => '栄養機能食品では、申請者が消費者庁長官に届け出た表現により栄養成分の機能を表示できる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-59',
                'content' => '機能性表示食品では、申請者は最終製品に関する研究レビュー（システマティックレビュー）で機能性の評価を行うことができる。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-59',
                'content' => '機能性表示食品は、特別用途食品の 1 つである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-60',
                'content' => 'サーデンペプチド —– 血圧が高めの方に適した食品',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-60',
                'content' => 'キトサン —– カルシウムの吸収を促進する食品',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-60',
                'content' => 'ガラクトオリゴ糖 —– お腹の調子を整える食品',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-60',
                'content' => '茶カテキン —– 体脂肪が気になる方に適した食品',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-60',
                'content' => 'リン酸化オリゴ糖カルシウム —– 歯の健康維持に役立つ食品',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-61',
                'content' => 'アルファ化米は、炊飯した米を冷却後、乾燥させたものである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-61',
                'content' => '無洗米は、精白後に残る米表面のぬかを取り除いたものである。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-61',
                'content' => '薄力粉のたんぱく質含量は、12～13 ％である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-61',
                'content' => '発酵パンは、ベーキングパウダーにより生地を膨らませる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-61',
                'content' => 'コーンスターチは、とうもろこしを挽き割りにしたものである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-62',
                'content' => 'ドメスティックソーセージは、ドライソーセージに比べて保存性が高い。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-62',
                'content' => 'ベーコンは、主に鶏肉を塩漬し、くん煙したものである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-62',
                'content' => 'ボンレスハムは、細切れの畜肉につなぎ材料等を混合し、圧力をかけたものである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-62',
                'content' => 'コンビーフは、牛肉を塩漬し、煮熟後にほぐし、調味して容器に詰めたものである。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-62',
                'content' => 'ビーフジャーキーは、細切れの牛肉を塩漬し、調味してケーシングに詰めたものである。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-62',
                'content' => '冷凍におけるグレーズは、食品の酸化を防ぐ効果がある。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-63',
                'content' => '冷蔵における低温障害は、主に畜肉で発生する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-63',
                'content' => '水産物の缶詰では、主に低温殺菌が用いられている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-63',
                'content' => 'ガス置換による保存・貯蔵では、空気を酸素に置換する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-63',
                'content' => 'わが国において、放射線の照射は、殺菌のために許可されている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-64',
                'content' => '三徳包丁は、代表的な和包丁である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-64',
                'content' => '両刃の包丁は、片刃のものより、かつらむきに適している。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-64',
                'content' => '平底の鍋は、丸底のものより電磁調理器に適している。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-64',
                'content' => '蒸し器内の水蒸気の温度は、120℃ 以上である。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-64',
                'content' => '家庭用冷凍庫の庫内は、-5℃ 前後になるように設定されている。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-65',
                'content' => '煮魚では、魚臭を抑えるために、魚を低温の煮汁とともに加熱して沸騰させる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-65',
                'content' => 'でんぷん糊液では、とろみを増すために、でんぷんをあらかじめデキストリン化する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-65',
                'content' => 'フルクトースを多く含む果物では、甘味を増すために冷やす。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-65',
                'content' => 'みそ汁では、うま味を増すために、みそを入れてから長時間加熱する。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-65',
                'content' => 'きんとんでは、色よく仕上げるために、さつまいもの皮を薄くむく。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
          DB::table('choices')->insert([
                'quiz_id' => '35-66',
                'content' => 'ほうれんそうは、緑色から黄褐色になる。',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-66',
                'content' => '赤たまねぎは、赤紫色から青色になる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-66',
                'content' => 'れんこんは、白色から黄色になる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-66',
                'content' => 'にんじんは、橙赤色から黄色になる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-66',
                'content' => '牛肉は、暗赤色から鮮赤色になる。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-67',
                'content' => '会席料理では、最初に飯と汁が供される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-67',
                'content' => '精進料理では、煮干しだしの汁が供される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-67',
                'content' => '西洋料理の正餐では、最初に魚料理（ポワソン）が供される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-67',
                'content' => 'ビュッフェでは、主食、主菜、副菜が順番に供される。',
                'answer' =>0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
         DB::table('choices')->insert([
                'quiz_id' => '35-67',
                'content' => '中国料理では、菜と点心が供される',
                'answer' =>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => Null,
         ]);
    }
}
