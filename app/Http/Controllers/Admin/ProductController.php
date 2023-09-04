<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequestStore;
use App\Http\Requests\ProductRequestUpdate;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        $products = Product::orderBy('id','DESC')->paginate(6);
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequestStore $request)
    {
        $product = $request->only('name','description','status','content','category_id','price');
        $slug = Str::slug($request->name);
        $product['slug'] = $slug;

        $product['created_at'] = now();
        $product['updated_at'] = now();

        // dd($product);

        //tạo tên file
        $fileName = $request->name .rand(1,1000).time().'.'. $request->file('img')->extension();
        //lưu trữ vào storage
        $request->file('img')->storeAs('public/product',$fileName);
        // tạo đường dẫn lưu vào db
        $imgPath = 'storage/product/' . $fileName;
        $product['img']= $imgPath;

        // dd($category,$slug);
        Product::create($product);
        // đẩy dữ liệu vào sql

        // hoặc

        // Category::create($category);

        return redirect()->route('admin.product.index');
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
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequestUpdate $request,Product $product)
    {
        $data1 = $request->only('name','description','status','content');
        $data1['slug'] = Str::slug($data1['name']);
        // package của lrv
        // phương thức tạo slug vì có trong db nhưng k có ở người dùng
        // $slug['slug'] = $data1;

        // $data1['created_at'] = now();
        $data1['updated_at'] = now();
        // $product->update($data1);

        if($request->img){

        //tạo tên file
            $fileName = $request->name .rand(1,1000).time().'.'. $request->file('img')->extension();
        //lưu trữ vào storage
            $request->file('img')->storeAs('public/product',$fileName);
        // tạo đường dẫn lưu vào db
            $imgPath = 'storage/product/' . $fileName;
            $data1['img']= $imgPath;
            Storage::delete($imgPath);


        }
        // $data1['img'] = $request->img;
        if ($product->update($data1)) {
            return redirect()->route('admin.product.index')->with('success','Sửa thành công');
        }
            return redirect()->back()->with('error','sửa thất bại');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->delete()) {
            return redirect()->back()->with('success','xóa thành công');
        }
            return redirect()->back()->with('error','xóa thất bại');



    }
}
