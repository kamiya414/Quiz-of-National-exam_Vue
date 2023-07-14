<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz_year;

class QuizYearController extends Controller
{
    //
    public function option_years(Quiz_year $quiz_year)
    {
        return inertia("Quiz/option_years",["quiz_years" => $quiz_year->get()]);
    }
    

}
