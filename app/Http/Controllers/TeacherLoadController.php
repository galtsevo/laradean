<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherLoadController extends Controller
{
    public function index()
    {
        return view('teacherLoad');
    }

}
