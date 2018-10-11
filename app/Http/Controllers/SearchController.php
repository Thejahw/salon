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


            $type1= $request->query('type1');
             $type2= $request->query('type2');
            $type3= $request->query('type3');
            $type4= $request->query('type4');

            print_r($type1);
        print_r($type2);
        print_r($type3);
        print_r($type4);


            $location = $request->query('location');

            $freelancers=DB::table('users')
                ->where('users.location','like','%'.$location.'%')
                ->where('skills.skill_id','like','%'.$type1.'%')
                ->where('skills.skill_id','like','%'.$type2.'%')
                ->where('skills.skill_id','like','%'.$type3.'%')
                ->where('skills.skill_id','like','%'.$type4.'%')
                ->join('skills','skills.s_id','=','sid')
                ->join('skillset','skillset.Id','=','skills.skill_id')
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
