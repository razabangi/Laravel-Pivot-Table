<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * create
     *
     * @param  mixed $id
     * @return void
     */
    public function create($id)
    {
        $post = Post::with("tags")->where('id', $id)->get();
        // $post[0]->tags()->attach([1,4,5]); //simple attach

        // attach with pivot table extra field value field
        $post[0]->tags()->attach([
            1 => [
                "status" => "pending"
            ],
            2 => [
                "status" => "pending"
            ],
            3 => [
                "status" => "pending"
            ],
            4 => [
                "status" => "approved"
            ]
        ]);
    }

    /**
     * add_by_sync
     *
     * @param  mixed $id
     * @return void
     */
    public function add_by_sync($id)
    {
        $post = Post::with("tags")->where('id', $id)->get();
        $post[0]->tags()->sync([1,2,4]);
    }

    public function delete($id)
    {
        $post = Post::with("tags")->where('id', $id)->get();
        $post[0]->tags()->detach([1]);
    }

    public function show()
    {
        $posts = Post::with("tags")->get();
        $postTags = Tag::with("posts")->get();
        return view('post', compact('posts', 'postTags'));
    }
}
