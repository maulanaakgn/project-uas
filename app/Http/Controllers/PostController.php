<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\models\Post;


class PostController extends Controller
{
    /**
     * @return View
     */

    public function index(): view
    {
        return view('posts.index');
    }

    public function view()
    {
        return view('posts.view');
    }

    public function edit()
    {
        return view('posts.edit');
    }

    public function login()
    {
        return view('posts.login');
    }
}
