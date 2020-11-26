<?php

namespace App\Http\Controllers;

use App\Chatlists;
use App\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class MessageController extends Controller
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
    public function index($id)
    {
        //

        if ( DB::table('user_profiles')->where('id', Auth::id() )->exists() ) {
            // user found
            $user = Auth::user();
            $owner = DB::table('user_profiles')->where('id', Auth::id())->first();
            $friend = DB::table('user_profiles')->where('id', $id)->first();
           // $lists = DB::table('messages')->where('id', $user->id)->first();

            $messages = DB::table('messages')
                ->where('idfrom', Auth::id())
                ->where('idto', $id)
                ->orWhere('idto', Auth::id())
                ->where('idfrom', $id)
                ->orderBy('created_at')
                ->get();

             DB::table('chatlists')
                ->where('xid', Auth::id())
                ->where('yid', $id)
                ->orderBy('updated_at')
                ->update(['status' => '0']);

            /*$lists = DB::table('messages')->where('idfrom',Auth::id())
                ->orWhere('idto',Auth::id())
                ->get();*/
            if ( DB::table('chatlists')->where('xid', Auth::id() )->exists() ){
                $lists = DB::table('chatlists')->where('xid',Auth::id())
                    ->orderBy('updated_at','DESC')
                    ->groupBy('yid')
                    ->get();
            }
            else $lists = null;


            return view('message',compact('messages', 'friend', 'lists'));
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
    public function store(Request $request,$id)
    {
        //
        $owner = DB::table('user_profiles')->where('id', Auth::id())->first();
        $friend = DB::table('user_profiles')->where('id', $id)->first();

        $table = new Messages();


        $table->idfrom = $owner->id;
        $table->idfrom_name = $owner->name;
        $table->idfrom_pic = $owner->avatar;

        $table->idto = $friend->id;
        $table->idto_name = $friend->name;
        $table->idto_pic = $friend->avatar;

        $table->text = $request->text;

        $table->save();


        $messages = DB::table('messages')
            ->where('idfrom', Auth::id())
            ->where('idto', $id)
            ->orWhere('idto', Auth::id())
            ->where('idfrom', $id)
            ->orderBy('created_at')
            ->get();




       /* $lists = DB::table('messages')->where('idfrom',Auth::id())
            ->orWhere('idto',Auth::id())
            ->orderBy('created_at','DESC')
            ->get();*/

        if ( DB::table('chatlists')->where('xid', Auth::id() )->where('yid',$id)->exists() ) {
            $tables = new Chatlists();
            DB::table('chatlists')->where('xid', Auth::id())->where('yid', $id)
                ->update(['updated_at' => date('Y-m-d G:i:s')]);
            DB::table('chatlists')->where('xid', $id)->where('yid', Auth::id())
                ->update(['status' => $tables->status + 1]);
        }
        else{
            $tables = new Chatlists();
            $tables->xid = Auth::id();
            $tables->xname = $owner->name;
            $tables->xpic = $owner->avatar;
            $tables->yid = $id;
            $tables->yname = $friend->name;
            $tables->ypic = $friend->avatar;
            $tables->status = 1;

            $tables->save();
        }

        if ( DB::table('chatlists')->where('xid', $id )->where('yid',Auth::id())->exists() ) {
            $tables = new Chatlists();
            DB::table('chatlists')->where('xid', $id )->where('yid', Auth::id())
                ->update(['updated_at' => date('Y-m-d G:i:s')])
                /*->update(['status' => ($tables->status)+1])*/;
        }
        else{
            $tables = new Chatlists();
            $tables->xid = $id;
            $tables->xname = $friend->name;
            $tables->xpic = $friend->avatar;
            $tables->yid = Auth::id();
            $tables->yname = $owner->name;
            $tables->ypic = $owner->avatar;
            $tables->status = 1;

            $tables->save();
        }
        if ( DB::table('chatlists')->where('xid', Auth::id() )->exists() ){
            $lists = DB::table('chatlists')->where('xid',Auth::id())
                ->orderBy('updated_at','DESC')
                ->groupBy('yid')
                ->get();
            //dd($lists);
        }
        else $lists = null;
       //dd($lists);
        return view('message',compact('messages','friend', 'lists'));


        //return view('message',compact())
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $owner = DB::table('user_profiles')->where('id', Auth::id())->first();
        /*$lists = DB::table('messages')->where('idfrom',Auth::id())
            ->orWhere('idto',Auth::id())
            ->orderBy('created_at','DESC')
            ->get();*/

        if ( DB::table('chatlists')->where('xid', Auth::id() )->exists() ){
            $lists = DB::table('chatlists')->where('xid',Auth::id())
                ->orderBy('updated_at','DESC')
                ->groupBy('yid')
                ->get();
            //dd($lists);

        }
        else{
            $lists = null;
        }

        //dd($lists);
        $messages = null;
        $friend = null;
        return view('message',compact('messages','friend', 'lists'));
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
        $user = DB::table('user_profiles')->where('id', $id)->first();
        return back(compact('$user'));

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
