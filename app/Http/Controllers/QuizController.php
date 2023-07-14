<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Choice;


class QuizController extends Controller
{
    //
    
    public function quizzes(Quiz $quiz)
    {
        // return inertia("Quiz/quiz",["quizzes" => $quiz->load('choices')->get()]); 
        return inertia("Quiz/quiz",["quizzes" => $quiz::with("choices")->get()]);
    }
 
  
}

