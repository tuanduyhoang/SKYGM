<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class HomeController extends Controller
{
    public function getHome(){

        $products = Product::all();
        $categories = Category::all();
        // dd($products);
        return view('front.home',compact('products','categories'));


    }
    public function getSearch(Request $request) {
        $result = $request->result;
        // $result = str_replace(' ','%',$result);
        $data['keyword'] = $result;
        // dd($result);
        $data['items'] = Product::where('name','like','%'.$result.'%')->get();
        // dd($data);
        return view('front.search',$data);
    }

    public function getDetail($id) {
        $data['item'] = Product::find($id);
        return view('front.details',$data);
    }
    public function getWishList() {
        // $data['item'] = Product::find($id);
        return view('front.wishlist');
    }
    public function getCategory($id) {
        // $products = Product::where('category_id',$id)->orderBy('id','desc');
        // return view('front.category',compact('products'));
        $products = \App\Models\Product::where('category_id',$id)->orderBy('id','DESC')->paginate(0);
        $catename = Category::find($id);
        // dd($products);
        return view('front.category',compact('products','catename'));

    }
    public function postComment($id) {

    }
    public function contact () {
        return view('front.contact');
    }
    public function about () {
        return view('front.about');
    }

}
