<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
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
    // $post = Post::where('title', 'LIKE', '%post%')->get();

    // Atualizando registros forma 1
    // $post = Post::find(1);
    // $post->title = 'Meu novo título';
    // $post->save();

    // Atualizando registros forma 2
    // $input = [
    //     'title' => 'Meu novo título vindo do input',
    //     'body' => 'Meu novo texto aqui e agora'
    // ];

    // $post = Post::find(1);
    // $post->fill($input);
    // $post->save();

    // deletando registros
    // $post = Post::find(1);
    // $post->delete();

    
    // dd($post);
    //return view('welcome');

    // Relacionamentos 1 -> 1
    //$user = User::with('profile')->find(3);
    // $user->profile()->create([
    //     'type' => 'PJ',
    //     'document_number' => '654654654'
    // ]);

    // Relacionamentos 1 -> N
    //$user = User::with('posts', 'profile')->find(1);
    // $user->posts()->create([
    //     'title' => 'Meu post de relacionamento',
    //     'body' => 'Meu texto aqui'
    // ]);

    // Relacionamentos N -> N
    // $roles = Role::all();
    // dd($roles);

    $user = User::with('roles')->find(2);
    $user->roles()->attach(2);
    dd($user);
});

Route::get('admin/usuarios', [UserController::class, 'index']);
Route::get('admin/usuarios/{user}', [UserController::class, 'show']);