<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // $user = Auth::guard('admin')->user();
        // echo 'Xin chào Admin, '. $user->name;
        // dd(1);
        return view('admin.master');
    }
}
