<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{

    // send the details of a specific person(freelancer) to his profile view
    public function viewData(Request $request){

        $profile = DB::table('users')// with images
            ->select('sid','first_name','last_name','description','email','profile_pic','gender','contact','total_rate',
            'phase_rate','location','home_no','street_address','city','state','password','education','Experiance',
            'galleries.galery_image')
            ->where('sid','like','%'. $request->query('id').'%')
            ->join('galleries','galleries.s_id','=','sid')
            ->get();

        $profile_skill = DB::table('users')
            ->where('sid','like','%'. $request->query('id').'%')
            ->join('skills','skills.s_id','=','sid')
            ->get(['sid','skills.skill_id',
                ]);

        return view('profile')->with('profile',$profile)
            ->with('profile_skill',$profile_skill);
    }

    public function checkAvailability(Request $request){
        return view ('availability');


    }
}


