<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::get()->first();
        $post2 = Post::skip(1)->first();
        $post3 = Post::skip(2)->first();
        //dd($post3);
        return view('post', compact('post', 'post2', 'post3'));
    }

    public function create()
    {
        return view('tambah_post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
            'judul' => 'required|string',
            'konten' => 'required|string',
        ]);

        $filename = time() . '.png';
        $request->file('gambar')->storeAs('public/post', $filename);

        Post::create([
            'gambar' => $filename,
            'judul' => $request->judul,
            'konten' => $request->konten
        ]);

        return redirect('/post')->with(['success' => 'Data berhasil disimpan']);
    }

    public function admin()
    {
        $post = Post::get();
        return view('admin_post', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit_post', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->judul = $request->judul;
        $post->konten = $request->konten;

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
            ]);

            $filename = time() . '.png';
            $request->file('gambar')->storeAs('public/post', $filename);

            // Delete old image
            $oldImage = public_path('storage/post/' . $post->gambar);
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            $post->gambar = $filename;
        }

        $post->save();

        return redirect('/admin_post')->with(['edit' => 'Data berhasil diperbarui']);
    }
}
