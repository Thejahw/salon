<?php

namespace App\Http\Controllers;

use App\skill;
use http\Env\Response;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    //search for the welcome page(by name and the location)
    public function search(Request $request)
    {

        $freelancers = User::where('location', 'like', '%' . $request->query('location') . '%')
            ->where('first_name', 'like', '%' . $request->query('fname'). '%')
            ->where('last_name', 'like', '%' . $request->query('lname'). '%')
            ->get();

        return view('result')
            ->with('freelancers', $freelancers);
    }

//secondary serch by the skill, location, rate
    public function typeFilter(Request $request)
    {


        $freelancers = DB::table('users')
            ->select('sid', 'first_name', 'last_name', 'description', 'profile_pic', 'total_rate', 'phase_rate',
                'location', 'home_no', 'street_address', 'city', 'state', 'education'
            )
            ->join('skills', 'skills.s_id', '=', 'sid')
            ->where('users.location', 'like', '%' . $request->query('location') . '%')
            ->where('users.phase_rate', '>=', $request->query('min_rate'))
            ->where('users.phase_rate', '<=', $request->query('max_rate'))
            ->when(!empty($request->query('type1')),function ($q1) use ($request) {
                $q1->where('skills.skill_id', 'like', '%' . $request->query('type1') . '%');
            })
            ->when(!empty($request->query('type2')),function ($q2) use ($request) {
                $q2->where('skills.skill_id', 'like', '%' . $request->query('type2') . '%');
            })
            ->when(!empty($request->query('type3')),function ($q3) use ($request) {
                $q3->where('skills.skill_id', 'like', '%' . $request->query('type3') . '%');
            })
            ->when(!empty($request->query('type4')),function ($q4) use ($request) {
                $q4->where('skills.skill_id', 'like', '%' . $request->query('type4') . '%');
            })
            ->distinct()
            ->get();


        return view('result')->with('freelancers', $freelancers);//return to the result page

    }


}
