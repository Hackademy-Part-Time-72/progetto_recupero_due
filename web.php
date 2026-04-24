<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Article;

Route::get('/', function () {
    $articles = Article::latest()->take(10)->get();
    return view('home', compact('articles'));
})->name('home');

Route::middleware('auth')->group(function () {

    Route::get('/articles/create', function () {
        return view('articles.create');
    })->name('articles.create');

    Route::post('/articles', function (Request $request) {
        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1,
        ]);

        return redirect('/');
    })->name('articles.store');
});

require __DIR__ . '/settings.php';
