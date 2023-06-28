<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choices extends Model
{
    use HasFactory;
    
    public function quiz()
{
 return $this->belongsTo(quiz::class);
}

}
