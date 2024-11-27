<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Post::query()
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.slug', 'posts.image', 'categories.name as category_name', 'posts.is_published');

        if ($request->has('search') && !empty($request->input('search')['value'])) {
            $search = $request->input('search')['value'];
            $query->where('posts.title', 'like', '%' . $search . '%')
                ->orWhere('posts.short_description', 'like', '%' . $search . '%')
                ->orWhere('posts.content', 'like', '%' . $search . '%')
                ->orWhere('categories.name', 'like', '%' . $search . '%');
        }

        $totalData = $query->count();

        if ($request->has('order')) {
            $orderColumn = $request->input('columns')[$request->input('order.0.column')]['data'];
            $orderDir = $request->input('order.0.dir');
            $query->orderBy($orderColumn, $orderDir);
        }
        
        $start = $request->input('start', 0);
        $length = $request->input('length', 10);

        $categories = $query->skip(intval($start))
            ->take(intval($length))
            ->get();

        return response()->json([
            'data' => $categories,
            'recordsTotal' => $totalData,
            'recordsFiltered' => $totalData,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return response()->json([
                'message' => 'Xóa bài viết thành công'
            ], 200);
        }else{
            return response()->json([
                'message' => 'Không tìm thấy bài viết'
            ], 404);
        }
    }
}
