<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User; // 追記
use Laravel\Socialite\Facades\Socialite; // 追記
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // 省略

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $gUser = Socialite::driver('google')->stateless()->user();

        // email が合致するユーザーを取得
        $user = User::where('email', $gUser->email)->first();

        // 見つからなければ新しくユーザーを作成
        if ($user == null) {
            $user = $this->createUserByGoogle($gUser);
        }

        // ログイン処理
        Auth::login($user, true);
        return redirect('/quizzes/options');
    }


    public function createUserByGoogle($gUser)
    {
        // emailが合致するユーザーが見つからなかった場合の新規ユーザー作成処理
        $user = User::create([
            'name'     => $gUser->name,
            'email'    => $gUser->email,
            'password' => Hash::make(uniqid()),
        ]);
        return $user;
    }
}