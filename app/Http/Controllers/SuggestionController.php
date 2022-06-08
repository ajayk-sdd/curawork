<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\connection;
use App\Models\User;
class SuggestionController extends Controller
{
    public function index($i="") 
    {

        $connected=  connection::where('user_id',Auth::id())->orWhere('connected_id',Auth::id())->get();
        if($connected){
            $output = '';
            $count=0;
            $common = [];
            foreach ($connected as $user) {
                if($user->connected_id ==Auth::id()){
                    $common[]=$user->user_id;
                }else{
                   $common[]=$user->connected_id;
                }

            }
            $notConnected= User:: whereNotIn('id',$common)->get();

            foreach ($notConnected as $users) {
                
             if( $users->id != Auth::id() ){
                if( $count>=10 && $i==""){
                    $count++;
                    continue;
                } 
                $output .= View::make("components.suggestion")
                            ->with("id",$users->id)
                            ->with("name",$users->name)
                            ->with("email",$users->email)
                            ->render();
                $count++;   
                
                if( $count== $i  && $i!=""){
                    break;
                }     
               }
            }

              if( $count>10  && $i==""){
                    $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                                <button class="btn btn-primary" value="10" onclick="getMoreSuggestions()" id="load_more_btn">Load more </button>
                                </div>';
             }
             if( $count>=$i && $i!=""){
                $output .='<div class="d-flex justify-content-center mt-2 py-3" id="load_more_btn_parent">
                            <button class="btn btn-primary" value="<?php echo $i  ?>" onclick="getMoreSuggestions()" id="load_more_btn">Load more </button>
                            </div>';
         }
           
            return response()->json(['status'=>'sucess','content'=>$output]);
        }else{
            return response()->json(['status'=>'false']);
        }
        
        
    }



    public function store(Request $request)
    {
               $connection = new connection;
               $connection->user_id =Auth::id();
               $connection->connected_id = $request->sid;
               $connection->status = 0;
               $connection->save();
               return  $this->index();
                  
     }

     public function addMore(Request $request)
    {
        return  $this->index($request->total);
               
     }

}
