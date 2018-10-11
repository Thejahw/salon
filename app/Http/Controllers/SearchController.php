<?php

namespace App\Http\Controllers;

use App\skill;
use http\Env\Response;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function search(Request $request){
        $location = $request->query('location');

        $freelancers = User::where('location','like','%'.$location.'%')->get( );

//        return view('result')
//     ->with(response()->json($freelancers));

        return view('result')
            ->with('freelancers',$freelancers);
    }

    public function view(Request $request){


        return view('profile');

    }

    public function typeFilter(Request $request){

            $type= $request->query('type');
            $location = $request->query('location');

            $freelancers=DB::table('users')
                ->where('skills.skill_id','like','%'.$type.'%')
                ->where('users.location','like','%'.$location.'%')
                ->join('skills','skills.s_id','=','sid')
                ->get();

            return view('result')->with('freelancers',$freelancers);
        

//

    }

    public function sortInLocaation(Request $request){
        $type= $request->query('type');
        print_r($type);
//        $location = $request->query('location');

        $freelancers=DB::table('users')
            ->join('skills','skills.s_id','=','sid')
            ->where('skills.skill_id','like','%'.$type.'%')
            ->get();
        print_r($freelancers);
        return view('result')->with('freelancers',$freelancers);

    }
}
