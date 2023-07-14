<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_category extends Model
{
    use HasFactory;
    public function quizzes()   
{
 return $this->hasMany(quiz::class);  
}
}
