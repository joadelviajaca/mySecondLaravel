<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    { {
            $posts = Post::all();

            return view('posts.index', ['posts' => $posts]);
        }
    }

    public function show(Post $post)
    {
        // $post = Post::findOrFail($post);

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(SavePostRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required|max:50|min:4',
        //     'body' => 'required'
        // ]);




        Post::create($request->validated());

        // session()->flash('status', 'Post created!');

        return to_route('posts.index')->with('status', 'Post created!');


        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // Post::create([
        //     'title' => $request->input('title'),
        //     'body' => $request->input('body')
        // ]);

    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        // $validated = $request->validate([
        //     'title' => 'required|max:50|min:4',
        //     'body' => 'required'
        // ]);

        $post->update($request->validated());

        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        // session()->flash('status', 'Post updated!');
        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }
}
