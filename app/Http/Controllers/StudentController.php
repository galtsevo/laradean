<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $all_students = new Student;
//        return view('students', ['all_students' => $all_students->count_all_students()]);
        return view('students', ['all_students' => $all_students->show_all_students()]);
    }

}
