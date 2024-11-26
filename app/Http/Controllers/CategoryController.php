<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\RequestCategoryStore;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('admin.contens.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contens.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestCategoryStore $request)
    {   

        $data = [
            'name' => $request->category_name,
            'description' => $request->category_description,
            'slug' => Str::slug($request->category_name).'-'.time(),
        ];
        if ($request->hasFile('category_image')) {
            $data['image'] = $request->file('category_image')->store('category_images', 'public');
        }
        Category::create($data);

        return redirect()->route('admin.category.create')->with('success', 'Thêm mới danh mục thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('admin.category.index')->with('info', 'Danh mục không tồn tại');
        }else{
            return view('admin.contens.category.show', compact('category'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('admin.category.index')->with('info', 'Danh mục không tồn tại');
        }else{
            return view('admin.contens.category.edit', compact('category'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $image_old = $category->image;

        if (!$category) {
            return redirect()->route('admin.category.index')->with('info', 'Danh mục không tồn tại');
        }else{
            $data = [
                'name' => $request->category_name,
                'description' => $request->category_description,
            ];

            if ($request->hasFile('category_image')) {
                $data['image'] = $request->file('category_image')->store('category_images', 'public');
                if ($image_old) {
                    unlink(storage_path('app/public/'.$image_old));
                }
            }else{
                $data['image'] = $image_old;
            }
            
            $category->update($data);

            return redirect()->route('admin.category.edit',$category->id)->with('success', 'Cập nhật danh mục thành công');
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
