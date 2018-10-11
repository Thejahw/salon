<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{

    public function viewData(Request $request){
        $query = $request->query('id');

        $profile = DB::table('users')
            ->where('sid','like','%'.$query.'%')
            ->join('skills','skills.s_id','=','sid')
//            ->join('education','education.s_id','=','sid')
            ->get();

        return view('profile')->with('profile',$profile);
    }
}
