<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
     /// 主キーカラム名を指定
    protected $primaryKey = 'id';
    /// オートインクリメント無効化
    public $incrementing = false;
    /// Laravel 6.0+以降なら指定
    protected $keyType = 'string';
    
    public function quiz_categories()
    {
       return $this->belongsTo(Quiz_category::class);
    }
    public function quiz_years()
    {
       return $this->belongsTo(Quiz_year::class);
    }
    public function choices()   
    {
       return $this->hasMany(Choice::class);  
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
