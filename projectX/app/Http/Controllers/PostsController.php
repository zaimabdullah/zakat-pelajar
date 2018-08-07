<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pelajar' => 'required',
            'no_telefon' => 'required',
            'no_matrik' => 'required',
            'fakulti' => 'required',
            'kod_program' => 'required',
            'cgpa' => 'required',
            'penjaga' => 'required',
            'gaji' => 'required',
            'tanggungan' => 'required'
        ]);

        //Create Post
        $post = new Post;
        $post->pelajar = $request->input('pelajar');
        $post->no_telefon = $request->input('no_telefon');
        $post->no_matrik = $request->input('no_matrik');
        $post->fakulti = $request->input('fakulti');
        $post->kod_program = $request->input('kod_program');
        $post->cgpa = $request->input('cgpa');
        $post->penjaga = $request->input('penjaga');
        $post->gaji = $request->input('gaji');
        $post->tanggungan = $request->input('tanggungan');
        $post->save();

        return redirect('/posts')->with('success', 'Permohonan Telah Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pelajar' => 'required',
            'no_telefon' => 'required',
            'no_matrik' => 'required',
            'fakulti' => 'required',
            'kod_program' => 'required',
            'cgpa' => 'required',
            'penjaga' => 'required',
            'gaji' => 'required',
            'tanggungan' => 'required'
        ]);

        //Create Post
        $post = Post::find($id);
        $post->pelajar = $request->input('pelajar');
        $post->no_telefon = $request->input('no_telefon');
        $post->no_matrik = $request->input('no_matrik');
        $post->fakulti = $request->input('fakulti');
        $post->kod_program = $request->input('kod_program');
        $post->cgpa = $request->input('cgpa');
        $post->penjaga = $request->input('penjaga');
        $post->gaji = $request->input('gaji');
        $post->tanggungan = $request->input('tanggungan');
        $post->save();

        return redirect('/posts')->with('success', 'Permohonan Telah Dikemas kini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Permohonan Telah Dipadam');
    }
}
