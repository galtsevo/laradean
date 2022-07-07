<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StartPage extends Model
{

    public static function get_top_news($limit){

        $search_student = DB::connection('mysql2')
            ->select("SELECT * from mdl_forum_discussions d
                        inner join mdl_forum_posts p ON p.discussion=d.id
                        where d.forum=2 order by p.modified desc LIMIT $limit");

        return $search_student;
    }

}
