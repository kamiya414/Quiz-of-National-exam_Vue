<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\NoteController;



Route::get("/quizzes/options", [OptionController::class,"option"])->name('option');
Route::get("/quizzes/quiz/", [QuizController::class, "quizzes"])->name('quiz');#年度別経由
Route::get("/quizzes/quiz2/", [QuizController::class, "quizzes2"])->name('quiz2');#分野別経由
Route::get("/quizzes/choice", [ChoiceController::class, "choices"]);#選択肢
Route::post("/quizzes/result", [ResultController::class, "store"])->name('result.store');;#正誤記録
Route::get("/quizzes/", [ResultController::class, "result"])->name('result');  #結果表示
Route::get("/quizzes/result_total", [ResultController::class, "result_total"])->name('result_total'); #成績（全体）
Route::post("/quizzes/setting", [SettingController::class, "store"])->name('setting.store');
Route::post("/quizzes/setting2", [SettingController::class, "store2"])->name('setting.store2');
Route::get("/quizzes/years/{quiz_year}", [OptionController::class, "year_to_setting"])->name('year_to_setting');
Route::get("/quizzes/categories/{quiz_category}", [OptionController::class, "category_to_setting"])->name('category_to_setting');
Route::post("/quizzes/note", [NoteController::class, "store"])->name('note.store');




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
