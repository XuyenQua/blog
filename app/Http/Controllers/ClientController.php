<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Post::query()
            ->where('is_published', true)
            ->orderBy('id', 'desc')->take(3)->get();
        $trendings = Post::query()
            ->where('is_published', true)
            ->orderBy('views', 'desc')->take(5)->get();
        $posts = Post::query()
            ->select('title', 'slug', 'image', 'created_at')
            ->where('is_published', true)
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get();
        $postLast = Post::query()
            ->where('is_published', true)
            ->orderBy('id', 'desc')
            ->first();
        $data = array_chunk($posts->toArray(), 2);
        
        return view('client.index', compact('slider', 'trendings','data','postLast'));
    }


    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        if (!$category) {
            abort(404);
        }
        $posts = Post::query()
            ->where('is_published', true)
            ->where('category_id', $category->id)
            ->orderBy('id', 'desc')
            ->paginate(5);
        // dd($posts);
        return view('client.contents.category', compact('category', 'posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if (!$post) {
            abort(404);
        }
        $post->increment('views');
        return view('client.contents.post', compact('post'));
    }
}
