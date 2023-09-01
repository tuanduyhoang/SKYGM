<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function edit($id)
    {
        //  $users = User::find($id);
        $user = User::all()->find($id);
        // dd($user);
        // $users = User::find('id','DESC');
         return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, User $user)
    {

        $data1 = $request->only('name','email','password');
        // dd($data1);
        $data1['slug'] = Str::slug($data1['name']);
        // dd($request->all());
         # Validation
         $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'required|same:new_password'
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);


        // return back()->with("status", "Password changed successfully!");

        if ($user->update($data1)) {
            return redirect()->route('users.edit')->with('success','Sửa thành công');
        }
            return redirect()->back()->with('error','sửa thất bại');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
