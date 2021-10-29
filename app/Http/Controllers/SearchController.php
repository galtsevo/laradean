<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
//        $search = $request->all();
        $data = DB::connection('mysql2')
            ->table('mdl_bsu_students')
            ->where([
                ['Name', 'LIKE', "%{$request->term}%"],
                ['idKodPrith', '=', "1"],
            ])
            ->pluck('Name');

//        $data = DB::table('users')
//            ->where("name","LIKE","%{$request->term}%")
//            ->pluck('name');

//        $data = Student::select('Name')
//            ->where("username","LIKE","%{$request->term}%")
//            ->pluck('username');

        return response()->json($data);
    }
}