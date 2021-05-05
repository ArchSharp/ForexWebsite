<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class contactController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
          'name' => 'required|max:255',
          'email' => 'required|unique:contactform,email',
          'subject' => 'required|max:255',
          'message' => 'required',
        ]);
        $post = new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->subject = $request->subject;
        $post->message = $request->message;
        $post->save();
        return redirect('home')->with('message', 'Your message has been sent');
    }
}