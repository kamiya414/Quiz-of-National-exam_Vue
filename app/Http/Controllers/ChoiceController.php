<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choice;

class ChoiceController extends Controller
{
  public function choices(Choice $choice)
    {
      return inertia("Quiz/choice",["choices" => $choice->with("quiz")->get()]); #quiz_yearsをキーに
    }
}
