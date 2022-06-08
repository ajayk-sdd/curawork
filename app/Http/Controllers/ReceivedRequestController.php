<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\connection;
use App\Models\User;
class ReceivedRequestController extends Controller
{
    public function index($i="") 
    {
        $connected= User::leftJoin('connections', 'connections.user_id', '=', 'users.id')
                ->where('connections.connected_id',Auth::id())
                ->where('connections.status','==',"0")
                ->select('connections.*')
                ->get();
        if($connected){
            
            $output = '';
            $count=0;
            foreach ($connected as $userData) {
               
                if( $count>=10 && $i==""){
                    $count++;
                    continue;
                } 
                $connecteduser= User::where('id',$userData->user_id)->select('*')->get();
                    $output .= View::make("components.request",['mode' => 're','name' =>  $connecteduser[0]->name,'email' => $connecteduser[0]->email,'id' =>  $userData->id])
                    ->render();
                    $count++;   
                    if( $count== $i  && $i!=""){
                        break;
                    } 
                        
            }
            if( $count>10  && $i==""){
                $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                            <button class="btn btn-primary" value="10" onclick="getMoreAccepts()" id="load_more_btn1">Load more </button>
                            </div>';
                }
                if( $count>=$i && $i!=""){
                    $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                                <button class="btn btn-primary" value="<?php echo $i  ?>" onclick="getMoreAccepts()" id="load_more_btn1">Load more </button>
                                </div>';
                }
            return response()->json(['status'=>'sucess','content'=>$output]);
        }else{
            return response()->json(['status'=>'false']);
        }
        
        
    }

    public function Update(Request $request) 
    {
        
        $connection = connection::find( $request->id);
 
        $connection->status = 1;
        
        $connection->save();
        return $this->index();
        
    }

    public function addMore(Request $request)
    {
        return  $this->index($request->total);
               
     }
}
