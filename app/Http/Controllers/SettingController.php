<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use App\Models\QuizYear;

class SettingController extends Controller
{
    //
    
    public function store(Request $request,Setting $setting)#quiz_year経路用
    {
        $input = $request->all();
        $input['limit']=$input['limit']=='true'?true:false;
        $input['user_id']=Auth::id();
       $settings=Setting::where('user_id',Auth::id())->first();
       if($settings==null){
           $setting->fill($input)->save();
            
       }else{
            $setting->update($input);
             
       }
    //   return inertia("Quiz/quiz");
         return redirect('/quizzes/quiz/');
       
       
    }
    public function store2(Request $request,Setting $setting) #quiz_category経路用
    {
        $input = $request->all();
        $input['limit']=$input['limit']=='true'?true:false;
        $input['user_id']=Auth::id();
        
        $settings=Setting::where('user_id',Auth::id())->first();
        if($settings==null){
           $setting->fill($input)->save();
            
       }else{
            $setting->update($input);
             
       }
        $setting->update($input);
        return redirect('/quizzes/quiz2/');
       
    }
 

}