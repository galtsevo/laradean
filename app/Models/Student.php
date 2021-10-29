<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
//    public $searchTerm;

    public function count_all_students(){
        $all_students = DB::connection('mysql2')
            ->table('mdl_bsu_students')
            ->where('idKodPrith', '=', 1)
            ->count();

        return $all_students;
    }

    public function show_all_students(){
        $all_students = DB::connection('mysql2')
            ->table('mdl_bsu_students')
            ->where([
                ['idKodPrith', '=', 1],
                ['id', '>', 343520],
            ])
            ->get();

        return $all_students;
    }

    public function search_student($searchTerm, $sortField, $sortAsc, $limit){
        $search_student = DB::connection('mysql2')
            ->select("select CodePhysPerson, `Name`, Zathetka, Kvalif, Otdelenie, FakultetName, Specyal, DateRojd, Dateotsh 
                            from mdl_bsu_students where idKodPrith=1 and `Name` like '$searchTerm' order by $sortField $sortAsc LIMIT $limit");

        return $search_student;
    }
}