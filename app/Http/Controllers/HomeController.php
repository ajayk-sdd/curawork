<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\connection;
use App\Models\User;
class HomeController extends Controller
{
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
        $requested=User::Join('connections', 'connections.user_id', '=', 'users.id')
                    ->where('users.id',Auth::id())
                    ->where('connections.status','0')
                    ->select('connections.*')
                    ->get();

        $connected=connection::where('connected_id',Auth::id())
                    ->where('status',1)
                    ->orWhere('user_id',Auth::id())
                    ->where('status',1)
                    ->select('*')
                    ->get();

        $received= User::leftJoin('connections', 'connections.user_id', '=', 'users.id')
                    ->where('connections.connected_id',Auth::id())
                    ->where('connections.status','==',"0")
                    ->select('connections.*')
                    ->get();


        $suggest=  connection::where('user_id',Auth::id())->orWhere('connected_id',Auth::id())->get();
        if($suggest){
            $totalSuggestion = 0;
            $common = [];
            foreach ($suggest as $user) {
                if($user->connected_id ==Auth::id()){
                    $common[]=$user->user_id;
                }else{
                   $common[]=$user->connected_id;
                }

            }
            $notConnected= User:: whereNotIn('id',$common)->get();

            foreach ($notConnected as $users) {
                
             if( $users->id != Auth::id() ){
                $totalSuggestion ++;
               }
            }
   
        }else{
            return response()->json(['status'=>'false']);
        }


        return view('home')->with('requested',count($requested))->with('connected',count($connected)) 
        ->with('received',count($received))->with('suggest',$totalSuggestion);

        
    }
}
