<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserProfile;
use Illuminate\Support\Facades\DB;

class MatchingController extends Controller
{

    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if( DB::table('user_profiles')->where('id', Auth::id() )->exists() ){

            $partner = null;
            $result1 = -1;
            $user = DB::table('user_profiles')->where('id', Auth::id())->first();

            $users = DB::table('user_profiles')->where('id', '!=', Auth()->id())->
            where('sex','=',$user->psex)->
            where('religion','=',$user->preligion)->
            where('maritalstatus','=',$user->pmaritalstatus)->
            where('age','>=',$user->pagefrom)->where('age','<=',$user->pageto)->get();


            return view('matching', compact('users','user','partner','result1'));

        }
        else{
            $user = Auth::user();
            return view('edit_bothprofile',compact('user'));
        }


    }

    public function result($id)
    {

        if( DB::table('user_profiles')->where('id', Auth::id() )->exists() ){

            $partner = DB::table('user_profiles')->where('id', $id)->first();
            $user = DB::table('user_profiles')->where('id', Auth::id())->first();

            $users = DB::table('user_profiles')->where('id', '!=', Auth()->id())->
            where('sex','=',$user->psex)->
            where('religion','=',$user->preligion)->
            where('maritalstatus','=',$user->pmaritalstatus)->
            where('age','>=',$user->pagefrom)->where('age','<=',$user->pageto)->get();

            $result1 = 0 ;
            $result2 = 0 ;

            if($user->mpreligious == $partner->mreligious)  $result1++;
            if($user->mpemployment == $partner->memployment)  $result1++;
            if($user->mplifestyle == $partner->mlifestyle)  $result1++;
            if($user->mpfamily == $partner->mfamily)  $result1++;
            if($user->mptravelling == $partner->mtravelling)  $result1++;
            if($user->mpmusic == $partner->mmusic)  $result1++;
            if($user->mpgame == $partner->mgame)  $result1++;
            if($user->mpsmoking == $partner->msmoking)  $result1++;
            if($user->mpdrinking == $partner->mdrinking)  $result1++;

            $result1 =(int) (($result1 * 100)/9);


            if($user->mreligious == $partner->mpreligious)  $result2++;
            if($user->memployment == $partner->mpemployment)  $result2++;
            if($user->mlifestyle == $partner->mplifestyle)  $result2++;
            if($user->mfamily == $partner->mpfamily)  $result2++;
            if($user->mtravelling == $partner->mptravelling)  $result2++;
            if($user->mmusic == $partner->mpmusic)  $result2++;
            if($user->mgame == $partner->mpgame)  $result2++;
            if($user->msmoking == $partner->mpsmoking)  $result2++;
            if($user->mdrinking == $partner->mpdrinking)  $result2++;

            $result2 =(int) (($result2 * 100)/9);

            return view('matching', compact('users','user','partner','result1','result2'));

        }
        else{
            $user = Auth::user();
            return view('edit_bothprofile',compact('user'));
        }


    }
}
