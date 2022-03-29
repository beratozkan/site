<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;
use Auth;
use App\Mail\resetpassword;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Str;


class Loginmodal extends Component
{
    public $email;
    public $token;
    public $password;
    public $resetPassword =False;
    
    public function render()
    {
        
        return view('livewire.loginmodal');
    }
    public function userisvalid(Request $request){
       
        if($user=User::where('email',$request->email)->first()){
                if($user->remember_token == $request->token && $request->email == $user->email ){
                        
                        $user->password = bcrypt($request->password);
                        $user->remember_token = NULL;
                        $user->save();
                        return redirect()->to("userpage");

                }
                else{
                    return response()->json("geçersiz token");
            }
        }
        else{
            return response()->json();
        }
    }

   public function resetpassword(){
        $this->resetPassword = !$this->resetPassword;
   }
   public $message="";
   
   public function sendmail(){
    if($user=User::where('email',$this->email)->first()){
        $this->token = Str::random(60);
        $user->remember_token = $this->token;
        $user->save();
        $this->token = "http://".$_SERVER['HTTP_HOST']."/sifre_sifirlama?"."email=".$this->email."&"."token=".$this->token;
        Mail::to($this->email)->send(new resetpassword(["email"=>$this->email,"token"=>$this->token]));
        $this->message = "şifre sıfırlama başarıyle gonderildi";
        $this->email = "";
        
    }

            
    else{
        
    }
}
}
