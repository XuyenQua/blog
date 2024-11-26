<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Category::select('id', 'name', 'slug', 'image');

        if ($request->has('search') && !empty($request->input('search')['value'])) {
            $search = $request->input('search')['value'];
            $query->where('name', 'like', '%' . $search . '%');
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
            'draw' => intval($request->input('draw')),
            'recordsTotal' => Category::count(),
            'recordsFiltered' => $totalData,
            'data' => $categories
        ],200);
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
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return response()->json([
                'message' => 'Xóa danh mục thành công'
            ], 200);
        }else{
            return response()->json([
                'message' => 'Không tìm thấy danh mục'
            ], 404);
        }
    }
}
