<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Choice;
use App\Models\Setting;
use Redirect;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;


class QuizController extends Controller
{
    //
    
    public function quizzes(Quiz $quiz,Result $result)  #(quiz_year用)
    {
        
        #正答率
        $setting=Setting::where('user_id',Auth::id())->first();
        $all=$result->orderBy('created_at','desc')->take($setting->num_of_que)->get();
        $total=$all->count();
        $correct=$all->where('content',1)->count();
        if($correct!=0){
            $correct_rate=$correct /$total *100 ;
            $correct_rate=round($correct_rate,1);
        }
        else{
            $correct_rate=0;
        }
 
        #設定 
        if($setting->sort=="random"){
            return inertia("Quiz/quiz",[
                // "quizzes" => $quiz::with("choices")->inRandomOrder()->take($setting->num_of_que)->get(),
                "quizzes" => $quiz::with("choices")->where('quiz_year_id',$setting->quiz_year_id)->inRandomOrder()->take($setting->num_of_que)->get(),
                "num_of_que"=>$setting->num_of_que,
                "total" =>$total,"correct" =>$correct,
                "correct_rate" =>$correct_rate
                ]);
        
        }
        else if($setting->sort=="asc"){
            return inertia("Quiz/quiz",[
                // "quizzes" => $quiz::with("choices")->orderBy('id','asc')->take($setting->num_of_que)->get(),
                 "quizzes" => $quiz::with("choices")->where('quiz_year_id',$setting->quiz_year_id)->orderBy('id','asc')->take($setting->num_of_que)->get(),
                "num_of_que"=>$setting->num_of_que,
                "total" =>$total,"correct" =>$correct,
                "correct_rate" =>$correct_rate
                ]);   
        }
        else{
            return inertia("Quiz/quiz",[
                // "quizzes" => $quiz::with("choices")->orderBy('id','desc')->take($setting->num_of_que)->get(),
                 "quizzes" => $quiz::with("choices")->where('quiz_year_id',$setting->quiz_year_id)->orderBy('id','desc')->take($setting->num_of_que)->get(),
                "num_of_que"=>$setting->num_of_que,
                "total" =>$total,"correct" =>$correct,
                "correct_rate" =>$correct_rate
                ]);  
        }
        
        
    
    }
    
    
        public function quizzes2(Quiz $quiz,Result $result)  #(quiz_category用)
    {
        
        #正答率
        $setting=Setting::where('user_id',Auth::id())->first();
        $all=$result->orderBy('created_at','desc')->take($setting->num_of_que)->get();
        $total=$all->count();
        $correct=$all->where('content',1)->count();
        if($correct!=0){
            $correct_rate=$correct /$total *100 ;
        }
        else{
            $correct_rate=0;
        }
 
        #設定 
        if($setting->sort=="random"){
            return inertia("Quiz/quiz2",[
                // "quizzes" => $quiz::with("choices")->inRandomOrder()->take($setting->num_of_que)->get(),
                "quizzes" => $quiz::with("choices")->where('quiz_category_id',$setting->quiz_category_id)->inRandomOrder()->take($setting->num_of_que)->get(),
                "num_of_que"=>$setting->num_of_que,
                "total" =>$total,"correct" =>$correct,
                "correct_rate" =>$correct_rate
                ]);
        
        }
        else if($setting->sort=="asc"){
            return inertia("Quiz/quiz2",[
                // "quizzes" => $quiz::with("choices")->orderBy('id','asc')->take($setting->num_of_que)->get(),
                 "quizzes" => $quiz::with("choices")->where('quiz_category_id',$setting->quiz_category_id)->orderBy('id','asc')->take($setting->num_of_que)->get(),
                "num_of_que"=>$setting->num_of_que,
                "total" =>$total,"correct" =>$correct,
                "correct_rate" =>$correct_rate
                ]);   
        }
        else{
            return inertia("Quiz/quiz2",[
                // "quizzes" => $quiz::with("choices")->orderBy('id','desc')->take($setting->num_of_que)->get(),
                 "quizzes" => $quiz::with("choices")->where('quiz_category_id',$setting->quiz_category_id)->orderBy('id','desc')->take($setting->num_of_que)->get(),
                "num_of_que"=>$setting->num_of_que,
                "total" =>$total,"correct" =>$correct,
                "correct_rate" =>$correct_rate
                ]);  
        }
        
        
        
        
        
        
        
        
        
    
    }
    
  
}

