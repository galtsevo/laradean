<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StartPage;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     */
    public function index()
    {
        return view('welcome', ['news' => StartPage::get_top_news(8)]);
    }
}
