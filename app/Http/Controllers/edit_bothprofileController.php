<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
//use Faker\Provider\File;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\In;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserProfile;
use Illuminate\Support\Facades\DB;
use App\file;


class edit_bothprofileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if ( DB::table('user_profiles')->where('id', Auth::id() )->exists() ) {
            // user found

            $user = DB::table('user_profiles')->where('id', Auth::id())->first();

            return view('view_bothprofile',compact('user'));

        }

        else{
            $user = Auth::user();
            return view('edit_bothprofile',compact('user'));
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
        //dd($request->all());





       $request->validate([
            'owner'=> 'required',
            'birthdate'=> 'required',
            'religion'=> 'required',
            'maritalstatus'=> 'required',
            'sex'=> 'required',
            'psex'=> 'required',
            'pagefrom'=> 'required',
            'pageto'=> 'required',
            'pmaritalstatus'=> 'required',
            'preligion'=> 'required',

            'mreligious' => 'required',
            'mpreligious' => 'required',
            'memployment' => 'required',
            'mpemployment' => 'required',
            'mlifestyle' => 'required',
            'mplifestyle' => 'required',
            'mfamily' => 'required',
            'mpfamily' => 'required',
            'mtravelling' => 'required',
            'mptravelling' => 'required',
            'mmusic' => 'required',
            'mpmusic' => 'required',
            'mgame' => 'required',
            'mpgame' => 'required',
            'msmoking' => 'required',
            'mpsmoking' => 'required',
            'mdrinking' => 'required',
            'mpdrinking' => 'required'
        ]);


        $log = Auth::user();

        $user = new UserProfile();


            if(Input::hasFile('avatar')){
                $file = Input::file('avatar');
                $file-> move(public_path(). '/PP/', $file -> getClientOriginalName());

                $user->avatar = $file -> getClientOriginalName();
            }


        $user->id = $log->id;
        $user->name = $log->name;
        $user->mail = $log->email;
        $user->country = $request->country;
        $user->owner = $request->owner;
        $user->district = $request->district;
        $user->citizenship = $request->citizenship;
        $user->sex = $request->sex;
        $user->birthdate = $request->birthdate;
        $user->age = Carbon::parse($request->birthdate)->age;
        $user->religion = $request->religion;
        $user->maritalstatus = $request->maritalstatus;
        $user->height = $request->height;
        $user->physicalstatus = $request->physicalstatus;
        $user->familyvalue = $request->familyvalue;
        $user->familystatus = $request->familystatus;
        $user->ethnicity = $request->ethnicity;
        $user->educationlevel = $request->educationlevel;
        $user->fieldofeducation = $request->fieldofeducation;
        $user->employedin = $request->employedin;
        $user->annualincome = $request->annualincome;
        $user->ancestralfamilyorigin = $request->ancestralfamilyorigin;
        $user->motheroccupation = $request->motheroccupation;
        $user->fatheroccupation = $request->fatheroccupation;
        $user->noofbrother = $request->noofbrother;
        $user->noofmarriedbrother = $request->noofmarriedbrother;
        $user->noofsister = $request->noofsister;
        $user->noofmarriedsister = $request->noofmarriedsister;
        $user->weight = $request->weight;
        $user->bodytype = $request->bodytype;
        $user->complexion = $request->complexion;
        $user->spokenlanguage = $request->spokenlanguage;
        $user->eatinghabit = $request->eatinghabit;
        $user->hobbies = $request->hobbies;
        $user->favourite = $request->favourite;


        $user->psex = $request->psex;
        $user->pagefrom = $request->pagefrom;
        $user->pageto = $request->pageto;
        $user->preligion = $request->preligion;
        $user->pmaritalstatus = $request->pmaritalstatus;


        $user->mreligious = $request->mreligious;
        $user->mpreligious = $request->mpreligious;
        $user->memployment = $request->memployment;
        $user->mpemployment = $request->mpemployment;
        $user->mlifestyle = $request->mlifestyle;
        $user->mplifestyle = $request->mplifestyle;
        $user->mfamily = $request->mfamily;
        $user->mpfamily = $request->mpfamily;
        $user->mtravelling = $request->mtravelling;
        $user->mptravelling = $request->mptravelling;
        $user->mmusic = $request->mmusic;
        $user->mpmusic = $request->mpmusic;
        $user->mgame = $request->mgame;
        $user->mpgame = $request->mpgame;
        $user->msmoking = $request->msmoking;
        $user->mpsmoking = $request->mpsmoking;
        $user->mdrinking = $request->mdrinking;
        $user->mpdrinking = $request->mpdrinking;

        $user->save();

        $user = DB::table('user_profiles')->where('id', Auth::id())->first();

        //return view('view_bothprofile',compact('user'));
        return redirect('view_bothprofile')->with(compact('user'));



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
