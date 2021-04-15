<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Project;
use App\Models\Newsletter;
use App\Models\Team;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard' , [
            'posts_count' => Post::all()->count() ,
            'projects_count' => Project::all()->count(),
            'teams_count' => Team::all()->count(),
            'newsletter_count' => Newsletter::all()->count(),
        ]);
    }

    public function index_newsletter()
    {
        return view('newsletter')->with('newsletters' , Newsletter::all());
    }

}
