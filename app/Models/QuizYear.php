<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizYear extends Model
{
    use HasFactory;
    public function quizzes()   
{
 return $this->hasMany(quiz::class);  
}

}
