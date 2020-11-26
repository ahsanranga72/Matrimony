<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd($users);

        $users = DB::table('user_profiles')->get();
        return view('home',compact('users'));

        /*if(Auth::id()) return Auth::id();
        else return "NO";*/
    }

    public  function home()
    {
    if(Auth::id()){
        if( DB::table('user_profiles')->where('id', Auth::id() )->exists() ){

            $user = DB::table('user_profiles')->where('id', Auth::id())->first();

            $users = DB::table('user_profiles')->where('id', '!=', Auth()->id())->
            where('sex','=',$user->psex)->
            where('religion','=',$user->preligion)->
            where('maritalstatus','=',$user->pmaritalstatus)->
            where('age','>=',$user->pagefrom)->where('age','<=',$user->pageto)->get();


            return view('home',compact('users'));

        }
        else{
            $user = Auth::user();
            return view('edit_bothprofile',compact('user'));
        }
    }
    else{
        $users = DB::table('user_profiles')->get();
        return view('home',compact('users'));
    }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
