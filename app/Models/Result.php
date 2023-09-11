<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Result extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    public function quiz()
    {
     return $this->belongsTo(quiz::class);
    }
    public function user()
    {
     return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'content',
        'user_id',
        'quiz_id',
    ];
    
}
