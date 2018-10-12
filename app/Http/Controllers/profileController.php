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
            ->join('galleries','galleries.s_id','=','sid')
            ->distinct()
            ->get(['sid','first_name','last_name','description','email','profile_pic','gender','contact','total_rate','phase_rate',
    'location','home_no','street_address','city','state','password','education','Experiance',distinct('skills.skill_id'),
               distinct('galleries.galery_image') ]);

        return view('profile')->with('profile',$profile);
    }
}


