<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Project;
use App\Models\Newsletter;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('index')->with('posts' , Post::all())->with('projects' , Project::all());
    }

    public function store_newsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        $newsletter = new Newsletter();
        $newsletter ->email    = $request->email;
        $newsletter ->save();
        return redirect()->route('index')->with('message','thank you for subscribing');

    }

    public function contact_send(Request $request)
    {
        dd($request->name,$request->company,$request->email,$request->phone,$request->message);
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact ->name     = $request->name;
        $contact ->company  = $request->company;
        $contact ->email    = $request->email;
        $contact ->phone    = $request->phone;
        $contact ->file     = $request->file;
        $contact ->message  = $request->message;
        $contact ->confirmed  = false;
        $contact ->save();
        return redirect()->route('index')->with('message','message send successfuly, we will message you back soon');

    }
    public function blog(){
        return view('posts.blog')->with('posts' , Post::all());
    }
    public function show_post(Post $post)
    {
        return view('posts.show')->with('post' , $post);
    }
}
