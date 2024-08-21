<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $new_post = [
            'title' => 'Meu primeiro post',
            'content' => 'Conteudo Qualquer',
            'author' => 'Elias',
        ];

        // Forma mais convencional de criar um registro no banco
        // $post = new Post($new_post);
        // $post->save();

        $post = new Post();
        $post->title = 'Meu primeiro post';
        $post->content = 'Conteudo Qualquer';
        $post->author = 'Elias';


        $post->save();

        dd($post);
    }

    public function read(Request $r)
    {
        $post = new Post();

        $post = $post->find(1);
        return $post;
    }

    public function all(Request $r)
    {
        $posts = Post::all();

        return $posts;
    }
    
    public function update(Request $request){
        $post = Post::where('id','>', 2)->update([
            'title' => 'Novo título',
            'content' => 'Novo conteúdo',
            'author' => 'Elias',
        ]);
        return $post;
    }

    public function delete(Request $request){
        $post = Post::find(4);
        $post->delete();
    }
}
