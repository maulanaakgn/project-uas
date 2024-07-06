<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


class PostController extends Controller
{
    /**
     * @return View
     */

    public function index(): view
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index',compact('posts'));
    }

    public function generatePDF()
    {
        $posts = Post::all();
        $pdf = PDF::loadView('posts.pdf', compact('posts'));
        return $pdf->download('posts.pdf');
    }

    public function view($code): View
    {
        $post = Post::findOrFail($code);
        return view('posts.view', compact('post'));
    }

    public function edit($code)
    {
        $post = Post::findOrFail($code);
        return view('posts.edit', compact('post'));
    }

    public function login()
    {
        return view('posts.login');
    }

    public function add()
    {
        return view('posts.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg,icon|max:2048',
        ]);

        $post = new Post();
        $post->title = $validate['title'];
        $post->content = $validate['content'];

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg,ico|max:2048',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $validate['title'];
        $post->content = $validate['content'];

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }
            $post->image = $request->file('image')->store('images', 'public');
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
