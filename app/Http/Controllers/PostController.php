<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // this is just static data
        // $AllPosts = [
        //     ['id' => '1', 'title' => "Introduction to Laravel", 'posted_by' => "Taylor Otwell", 'created_at' => "2026-02-10 ", 'description' => "Laravel is a PHP framework for web artisans. It provides elegant syntax, powerful tools for routing, authentication, and database management, making development faster and more enjoyable."],
        //     ['id' => '2', 'title' => "Getting Started with React", 'posted_by' => "Jordan Walke", 'created_at' => "2026-02-09 ", 'description' => "React is a JavaScript library for building user interfaces. It allows developers to create reusable UI components and manage state efficiently."],
        //     ['id' => '3', 'title' => "Understanding Tailwind CSS", 'posted_by' => "Adam Wathan", 'created_at' => "2026-02-08 ", 'description' => "Tailwind CSS is a utility-first CSS framework for rapid UI development. It helps developers build custom designs without leaving HTML."]
        // ];

        $AllPosts = Post::all();
        // dd($AllPosts);
        return view('posts.index', compact('AllPosts'));
    }
    public function show($postId)
    {
        $post = Post::find($postId);
        return view('posts.show', compact('post'));
    }
    public function create()
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }
    public function store()
    {
        $title = request()->title;
        $description = request()->description;
        $postedBy = request()->postedBy;

        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $postedBy
        ]);
        // dd();
        return redirect('posts');
    }
    public function edit()
    {
        return view('posts.edit');
    }
    public function destroy($id)
    {
        $selectedId = Post::find($id);
        $selectedId->delete();

        return redirect('posts');
    }
}
