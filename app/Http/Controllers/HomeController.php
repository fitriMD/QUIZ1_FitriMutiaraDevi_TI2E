<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Home;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function todayspecial()
    {
        $post = Post::all();
        return view('todayspecial', ['data' => $post]);
    }
    public function index()
    {
        $home = Home::all();
        return view('index', ['dataIndex' => $home]);
    }

    public function menucafe()
    {
        
        return view('menucafe');
    }

    public function varianmenu()
    {
        return view('varianmenu');
    }

    public function about()
    {
        return view('about');
    }

    public function informasi1()
    {
        return view('informasi1');
    }

    public function informasi2()
    {
        return view('informasi2');
    }
    public function contact()
    {
        return view('contact');
    }
    public function respon()
    {
        return view('respon');
    }
}

