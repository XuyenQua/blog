<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPostStore;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contens.post.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.contens.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestPostStore $request)
    {
        // dd($request->all());
        if ($request->published == 1) {
            $data['is_published'] = 1;
        } else {
            $data['is_published'] = 0;
        }

        // dd($data);

        $data = $request->except('image');
        $data['slug'] = Str::slug($request->title) . '-' . time();

        if ($request->hasFile('image')) {
            // $image = $request->file('image');
            // $name = time() . '.' . $image->getClientOriginalExtension();
            // $destinationPath = public_path('/uploads/posts');
            // $image->move($destinationPath, $name);
            // $data['image'] = $name;

            $data['image'] = $request->file('image')->store('posts_images', 'public');
        }

        $post = Post::create($data);
        // dd($post);
        if ($post) {
            return redirect()->route('admin.post.create')->with('success', 'Post created successfully.');
        } else {
            return redirect()->route('admin.post.create')->with('error', 'Post creation failed.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        if ($post) {
            return view('admin.contens.post.show', compact('post', 'categories'));
        } else {
            return redirect()->route('admin.post.index')->with('info', 'Post not found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        if ($post) {
            return view('admin.contens.post.edit', compact('post', 'categories'));
        } else {
            return redirect()->route('admin.post.index')->with('info', 'Post not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $old_image = $post->image;
        if ($post) {
            $data = $request->except('image');
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('posts_images', 'public');

                if ($data['image']) {
                    unlink(storage_path('app/public/' . $old_image));
                };
            } else {
                $data['image'] = $old_image;
            }

            $post->update($data);
            return redirect()->route('admin.post.edit',$post->id)->with('success', 'Post updated successfully.');
        } else {
            return redirect()->route('admin.post.index')->with('info', 'Post not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
