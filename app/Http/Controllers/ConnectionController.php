<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\connection;
use App\Models\User;
class ConnectionController extends Controller
{
    public function index($i="") 
    {
        $connected= connection:: where('connected_id',Auth::id())
                    ->where('status',1)
                    ->orWhere('user_id',Auth::id())
                    ->where('status',1)
                    ->select('*')
                    ->get();

        if($connected){
            $output = '';
            $count=0;
            foreach ($connected as $product) {
                 if(Auth::id() ==$product->connected_id){
                    $connecteduser=User::where('id',$product->user_id)->select('*')->get();
                 }else{
                    $connecteduser=User::where('id',$product->connected_id)->select('*')->get();
                 }

                    $commonUser=connection:: where('user_id',Auth::id())
                    ->where('status','1')
                    ->select('*')
                    ->get();
                    if($commonUser){
                        $outputs = 0;
                        foreach ($commonUser as $user) {
                                    $commonIn=
                                    connection::where('user_id',$product->connected_id)
                                    ->where('status','1')
                                    ->select('*')
                                    ->get();
                                    foreach ($commonIn as $cuser) {
                                        if($cuser->connected_id ==$user->connected_id){                          
                                            $outputs ++ ;  
                                        }
                                    }                                   
                        }
                    }else{
                        return response()->json(['status'=>'false']);
                    }

                    $output .= View::make("components.connection",['name' =>  $connecteduser[0]->name,'email' => $connecteduser[0]->email,'id' =>  $product->id,'connected_id' =>  $product->connected_id,'common'=>$outputs]) ;              
                    $count++;
                    if( $count==10 && $i==""){
                        break;
                    }   
                    if( $count== $i  && $i!=""){
                        break;
                    } 
                }
            if( $count>=10  && $i==""){
                $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                            <button class="btn btn-primary" value="10" onclick="getMoreConnections()" id="load_more_btn1">Load more </button>
                            </div>';
                }
                if( $count>=$i && $i!=""){
                    $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                                <button class="btn btn-primary" value="<?php echo $i  ?>" onclick="getMoreConnections()" id="load_more_btn1">Load more </button>
                                </div>';
                }
            return response()->json(['status'=>'sucess','content'=>$output]);
        }else{
            return response()->json(['status'=>'false']);
        }
        
        
    }


    public function destroy(Request $request) 
    {
        $deleted = connection::where('id',  $request->id)->delete();
        return $this->index();
             
    }


    public function show(Request $request) 
    {
       
          
        $i=$request->total;
          
        $connected=connection:: where('user_id',Auth::id())
                                ->where('status',1)
                                ->select('*')
                                ->get();
        if($connected){
            
            $output = '';
            $count=0;
            foreach ($connected as $userData) {
                        $connectedUser=connection::where('user_id',$request->id)
                                        ->where('status',1)
                                        ->select('*')
                                        ->get();
                        foreach ($connectedUser as $cuser) {
                            if($cuser->connected_id ==$userData->connected_id){
                                $user=User::where('id',$userData->connected_id)->select('*')->get();
                                $output .= View::make("components.connection_in_common",['name' =>  $user[0]->name,'email' => $user[0]->email]);  
                                $count++;
                                
                            }
                        }     
                        if( $count== $i  && $i>=10){
                            break;
                        }                    
            }
            if( $count>=10  && $i==10){
                $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                            <button class="btn btn-primary" value="10" onclick="getMoreConnectionsInCommon('.$request->id.')" id="load_more_btn1">Load more </button>
                            </div>';
                }
                if( $count>=$i && $i>10){
                    $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                                <button class="btn btn-primary" value="<?php echo $i  ?>" onclick="getMoreConnectionsInCommon('.$request->id.')" id="load_more_btn1">Load more </button>
                                </div>';
                }
            return response()->json(['status'=>'sucess','content'=>$output]);
        }else{
            return response()->json(['status'=>'false']);
        }
             
    }

    public function addMore(Request $request)
    {
        return  $this->index($request->total);
               
     }
}
