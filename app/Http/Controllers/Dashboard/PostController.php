<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->paginate(10);
        return view('dashboard.posts.index', compact('posts'));
    }
    
    public function create()
    {
        $tags = Tag::all();

        return view('dashboard.posts.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->content = $request->content;
        $post->published = $request->has('published') ? true : false;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->attach($request->tags);

        return redirect()->route('dashboard.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        $tags = Tag::all();

        return view('dashboard.posts.edit', compact('post', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|unique:posts,title,' . $post->id,
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->content = $request->content;
        $post->published = $request->has('published') ? true : false;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->sync($request->tags);

        return redirect()->route('dashboard.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();

        return redirect()->route('dashboard.posts.index')->with('success', 'Post deleted successfully.');
    }
}
