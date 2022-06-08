<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\connection;
use App\Models\User;
class RequestsController extends Controller
{
    public function index($i="") 
    {
        $connected=  User::Join('connections', 'connections.user_id', '=', 'users.id')
                ->where('users.id',Auth::id())
                ->where('connections.status','0')
                ->select('connections.*')
                ->get();
        if($connected){
            
            $output = '';
            $count=0;
            foreach ($connected as $product) {
                    if( $count>=10 && $i==""){
                        $count++;
                        continue;
                    } 
                    $connecteduser= User::where('id',$product->connected_id)
                                    ->select('*')
                                    ->get();
            
                    $output .= View::make("components.request",['mode' => 'sent','name' => $connecteduser[0]->name,'email' =>  $connecteduser[0]->email,'id' =>  $product->id])
                        ->render();
                        $count++;   
                        
                        if( $count== $i  && $i!=""){
                            break;
                        }  
               
            }
            if( $count>10  && $i==""){
                $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                            <button class="btn btn-primary" value="10" onclick="getMoreRequests()" id="load_more_btn1">Load more </button>
                            </div>';
                }
                if( $count>=$i && $i!=""){
                    $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                                <button class="btn btn-primary" value="<?php echo $i  ?>" onclick="getMoreRequests()" id="load_more_btn1">Load more </button>
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

    public function addMore(Request $request)
    {
        return  $this->index($request->total);
               
     }
    
}
