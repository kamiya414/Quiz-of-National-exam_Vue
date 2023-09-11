<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    
    public function quiz()
 {
  return $this->belongsTo(quiz::class);
 }
 public function user()
 {
  
  return $this->belongsTo(User::class);
 }
  
  
  protected $fillable = [
    
        'user_id',
        'quiz_id',
        'content'
    ];

}
