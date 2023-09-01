<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\CategoryRequestStore;
use App\Http\Requests\CategoryRequestUpdate;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = \App\Models\Category::orderBy('id','DESC')->paginate(3);
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function all()
    {
        $categories = \App\Models\Category::orderBy('id','DESC')->paginate(0);
        return view('categories.all',compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequestStore $request)
    {
        $category = $request->only('name','description','status');
        $slug = Str::slug($request->name);
        $category['slug'] = $slug;

        $category['created_at'] = now();
        $category['updated_at'] = now();

        //tạo tên file
        $fileName = $request->name .rand(1,1000).time().'.'. $request->file('img')->extension();
        //lưu trữ vào storage
        $request->file('img')->storeAs('public/category',$fileName);
        // tạo đường dẫn lưu vào db
        $imgPath = 'storage/category/' . $fileName;
        $category['img']= $imgPath;

        // dd($category,$slug);
        // DB::table('categories')->insert($category);
        // đẩy dữ liệu vào sql

        // hoặc

        Category::create($category);

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequestUpdate $request,Category $category)
    {
        $data = $request->only('name','description','status');
        $data['slug'] = Str::slug($data['name']);
        // package của lrv
        // phương thức tạo slug vì có trong db nhưng k có ở người dùng
        // $slug['slug'] = $data;

        // $data['created_at'] = now();
        $data['updated_at'] = now();
        // $category->update($data);

        if($request->img){

        //tạo tên file
            $fileName = $request->name .rand(1,1000).time().'.'. $request->file('img')->extension();
        //lưu trữ vào storage
            $request->file('img')->storeAs('public/category',$fileName);
        // tạo đường dẫn lưu vào db
            $imgPath = 'storage/category/' . $fileName;
            $data['img']= $imgPath;
            Storage::delete($imgPath);


        }
        // $data['img'] = $request->img;
        if ($category->update($data)) {
            return redirect()->route('admin.category.index')->with('success','Sửa thành công');
        }
            return redirect()->back()->with('error','sửa thất bại');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return redirect()->back()->with('success','Updated Successfully');
        }
            return redirect()->back()->with('error','xóa thất bại');



    }
    public function FunctionName() {

    }
}
