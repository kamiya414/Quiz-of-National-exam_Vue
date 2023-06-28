<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizzes extends Model
{
    use HasFactory;
    public function quiz_category()
{
 return $this->belongsTo(quiz_category::class);
}

public function quiz_year()
{
 return $this->belongsTo(quiz_year::class);
}
public function choices()   
{
  return $this->hasMany(choices::class);  
}

public function results()   
{
 return $this->hasMany(result::class);  
}

public function notes()   
{
 return $this->hasMany(note::class);  
}

public function explanations()   
{
 return $this->hasMany(explanation::class);  
}


}
