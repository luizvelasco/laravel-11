<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // Salvando registros, forma 1
    // $post = new Post();
    // $post->title = 'Meu primeiro post';
    // $post->body = 'texto texto';
    // $post->save();

    // Salvando registros, forma 2
    // $post = Post::create([
    //     'title' => 'Meu segundo post',
    //     'body' => 'texto aqui'
    // ]);

    // buscando registros forma 1
    //$post = Post::find(2);
    
    // buscando registros forma 2
    //$post = Post::where('title', 'meu segundo post')->first();

    // buscando registros forma 3
    $post = Post::where('title', 'LIKE', '%post%')->get();
    
    dd($post);
    //return view('welcome');
});

Route::get('admin/usuarios', [UserController::class, 'index']);
Route::get('admin/usuarios/{user}', [UserController::class, 'show']);