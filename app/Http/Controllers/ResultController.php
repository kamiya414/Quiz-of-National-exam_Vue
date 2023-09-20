<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Result;
use Redirect;
use App\Models\Setting;
use App\Models\Quiz;

class ResultController extends Controller
{
    public function store(Request $request,Result $result)
    {
        $input = $request->all();
        $input["user_id"]=Auth::id();
        $input['content']=(int)$input['content'];
        $result->fill($input)->save();
        return;
    }
    
    #成績（全体）
    public function result_total(Result $result)
    {   
        #正答率
        $total=$result->get()->count();
        $correct=result::where('content',1)->count();
        $correct_rate=$correct/$total*100;
        $correct_rate=round($correct_rate,1);
        #完璧65%以上のみ
        #苦手65%以下のみ
     
        $perfect=[];
        $weak=[];
        $to_be_ans=[];
        $perfect_cnt=0;
        $weak_cnt=0;
        $to_be_ans_cnt=0;
        $quizzes=Quiz::all();
        foreach($quizzes as $quiz){

            $result_correct=$result->where('quiz_id', $quiz->id)->where('content',1)->count();
            $result_total=$result->where('quiz_id', $quiz->id)->count();
            if($result_total!=0){
                $result_rate=$result_correct/$result_total*100;
                $result_rate=round($result_rate,1);
            }
            else{
         
                $result_rate=-1;
            }
             if($result_rate===-1){
                 #未学習
                array_push($to_be_ans,$quiz);
                $to_be_ans_cnt=count($to_be_ans);
            }
            
            elseif($result_rate>=65){
                #完璧
                array_push($perfect,$quiz);
                $perfect_cnt=count($perfect);
           
            }
            else{
                #苦手
                array_push($weak,$quiz);
                $weak_cnt=count($weak);
            }

     
        }
        // #未学習
        // $to_be_ans=$quiz->doesntHave('results')->get();
        // $to_be_ans_cnt=$to_be_ans->count(); 
        
        #すべて
        $quiz_cnt=$quiz->count();
 
        return inertia("Quiz/result_total",[
            "total" =>$total,
            "correct" =>$correct,
            "correct_rate" =>$correct_rate,
            "quiz_cnt"=>$quiz_cnt,
            "to_be_ans_cnt"=>$to_be_ans_cnt,
            "perfect_cnt"=>$perfect_cnt,
            "weak_cnt"=>$weak_cnt
            ]);
    

        
    }
    
    #解答後表示される結果↓QuizControllerへ
    // public function result(Result $result)
    // {
    //     $setting=Setting::where('user_id',Auth::id())->first();
    //     $all=$result->orderBy('created_at','desc')->take($setting->num_of_que)->get();
    //     $total=$all->count();
    //     $correct=$all->where('content',1)->count();
    //     $correct_rate=$correct/$total*100;
        
        
    //     return inertia("Quiz/quiz",[
    //         "total" =>$total,"correct" =>$correct,
    //         "correct_rate" =>$correct_rate
    // //         ]);
    

        
    // }
    
}
