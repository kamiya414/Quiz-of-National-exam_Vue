<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class NoteController extends Controller
{
    //
    //noteのページ
    // public function create(){
    //     return view('summernote.create');
    // }

    //noteの内容を保存
    public function store(Request $request , Note $note){
        $input = $request->all();
        $input['user_id']=Auth::id();
        $note->fill($input)->save();
    }

    //noteの内容を表示
    public function show(){
  
        
        return view('');
    }
}
