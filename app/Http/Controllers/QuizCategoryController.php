<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz_category;

class QuizCategoryController extends Controller
{
    //
     public function option_categories(Quiz_category $quiz_category)
    {
        return inertia("Quiz/option_categories",["quiz_categories" => $quiz_category->get()]);
    }
}
