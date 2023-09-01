<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;

class CartController extends Controller
{
    public function getAddCart(Request $request, string $id)  {
        // dd($id);
        $product = Product::find($id);
        // Cart::session($id);
        // $rowId = $product->id;
        // $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';

        // Cart::add(array([
        // 'id' => $rowId,
        // 'name'=> $product->name,
        // 'price' =>$product->price,
        // 'quantity'=> 1,
        // // 'attributes' => $product->toArray(),
        // 'options' => ['img' => $product->img]]));
        // $data = Cart::getContent();
        // dd($data);
        // $Product = Product::find($productId); // assuming you have a Product model with id, name, description & price
        $rowId = $request->id; // generate a unique() row ID
        // $userID = auth()->user()->id; // the user ID to bind the cart contents
        // dd($userID);
        // Cart::add(array(
        //     'id' => $request->id,
        //     'name' => $product->name,
        //     'price' => $product->price,
        //     'quantity' => 1,
        //     'attributes' => array('img' => $product->img),
        //     'associatedModel' => $product
        // ));
        Cart::add([
            'id' => $rowId,
            'name' =>  $product->name,
            'qty' => 1,
            'price' => $product->price,
            // 'attributes' => array('img' => $product->img),
            'options' =>  ['img' => $product->img],
            'associatedModel' => $product
        ]);
        //  $data = Cart::getContent();
        // dd($data);
        // return redirect('cart/show');
        return redirect()->route('showcart')->with('success','Item has been added');
    }
    public function getShowCart() {
        $data['items'] = Cart::content();
        // dd($data);
        $data['total'] = Cart::total();
        // dd($data);
        return view('front.cart',$data);
    }
    public function getUpdateCart(Request $request,$rowId) {
        // $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
        // $row = Cart::get($rowId);
// dd(request()->all(), $id);
        // Cart::update($rowId, $row->quantity + 1);
        // Cart::update($id, array(
        // //     'quantity' => 1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
        // //   ));
        //     $row = Cart::getContent()[$id];
        //     // dd();
        //      $row['item']->quantity +=  1;
        //     dd($row);

        //     Cart::update($id, $row);
        // $rowId = $request->id;
        // dd($rowId);
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        // Cart::update($rowId,$qty);

        Cart::update($rowId, $qty);

        // Cart::update($id,['qty'=> $request->qty]);

    }
    public function increaseQuantity(Request $request,$rowId)
    {
        // $rowId = $request->id;
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity(Request $request,$rowId)
    {
        // $rowId = $request->id;
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }
    public function getDeleteCart(Request $request,$id)
    {
        // $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
        // Cart::update($rowId,0);
        // Cart::destroy();
        // Cart::clear();
        // Cart::session($userId)->clear();

        // if($id=='all')
        // {
        //     Cart::clear();
        //     return back()->with('success','All Items have been removed');
        // }
        // else
        // {
            // dd($request->id);
            // $rowId = $request->id;
            // Cart::remove($id);//xoa mot san pham trong gio hang
            $cart = Cart::content();
            // dd($cart);
            $rowId ='4063dbcfc3ecc680c43ce5ac10e80850';
            if($cart->isNotEmpty()){
                Cart::remove($rowId);
            }

            return back()->with('success','Item has been removed');
        // }




    }
    public function getDeleteAll() {
        Cart::destroy();
            return back()->with('success','All Items have been removed');
    }
    public function checkout () {
        $data['items'] = Cart::content();
        $data['total'] = Cart::total();
        return view('front.checkout',$data);
    }
    public function postComplete(Request $request)
    {
    //     $data['info'] =$request->only(  'name',
    //     'email',
    //     'status',
    //    'price',
    //     'phone',
    //     'address',);

    //    $data['created_at'] = now();
    //    $data['updated_at'] = now();


        $data['total'] = Cart::total();
        $data['info'] = $request->all();

        $email = $request->email;
        $data['cart']= Cart::content();
        Mail::send('front.email', $data, function ($message) use ($email) {
            $message->from('sc.duytuan@gmail.com', 'SKYGM');
            $message->to( $email);
            $message->cc('sc.duyhoang@gmail.com', 'DH');
            $message->subject('Purchase receipt confirmation SKYGM');
        });
        // Order::create($data);
        return redirect()->route('complete')->with('success','Successful order, please check your email');
    }
    public function getComplete(){

        $data['items'] = Cart::content();
        return view('front.complete', $data);
    }
}
