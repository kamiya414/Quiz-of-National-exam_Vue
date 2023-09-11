<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use Illuminate\Http\Request;
use Redirect;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use App\Models\QuizYear;

class SettingController extends Controller
{
    //
    
    public function store(SettingRequest $request)#quiz_year経路用
    {
        $input = $request->all();
        $input['limit']=$input['limit']=='true'?true:false;
        $input['user_id']=Auth::id();
        
        $setting=Setting::where('user_id',Auth::id())->first();
        $setting->update($input);
        return Redirect::route('quiz');
       
    }
    public function store2(SettingRequest $request) #quiz_category経路用
    {
        $input = $request->all();
        $input['limit']=$input['limit']=='true'?true:false;
        $input['user_id']=Auth::id();
        
        $setting=Setting::where('user_id',Auth::id())->first();
        $setting->update($input);
        return Redirect::route('quiz2');
       
    }
 

}