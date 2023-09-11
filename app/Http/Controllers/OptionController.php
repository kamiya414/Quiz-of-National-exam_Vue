<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizYear;
use App\Models\QuizCategory;

class OptionController extends Controller
{
    public function option(QuizCategory $quiz_category,QuizYear $quiz_year)
    {
        return inertia("Quiz/option",["quiz_categories" => $quiz_category->get(),"quiz_years" => $quiz_year->get()]);
    }
    
    public function year_to_setting(QuizYear $quiz_year)
    {
        // return inertia("Quiz/setting")->with(['year' => $quiz_year]);
        return inertia("Quiz/setting",["quiz_year" => $quiz_year]);
    }
    public function category_to_setting(QuizCategory $quiz_category)
    {
        // return inertia("Quiz/setting")->with(['year' => $quiz_year]);
        return inertia("Quiz/setting2",["quiz_category" => $quiz_category]);
    }
    
    


   
}
