<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    
    
    protected $fillable = [
        'user_id',
        'quiz_year_id',
        'quiz_category_id',
        'range',
        'num_of_que',
        'sort',
        'limit',
        'time_limit'
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
