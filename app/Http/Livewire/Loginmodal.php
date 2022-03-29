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
    public $retypepassword; 
    public $resetPassword =False;
    public $message;
    
    public function render()
    {
        
        return view('livewire.loginmodal',["message"=>$this->message]);
    }
    public function userİsValid(Request $request){
        if($request->password != $request->retypepassword){
            $this->message = "şifreler aynı olmalıdır";
        
       /* if(){
                if($user->remember_token == $request->token && $request->email == $user->email ){
                        
                        $user->password = bcrypt($request->password);
                        $user->remember_token = NULL;
                        $user->save();
                        return redirect()->to("forum");

                }
                else{
                    return response()->json("gecersiz token");
            }
        }
        else{
            return response()->json();
        }*/
        
    }   
    else{
                        $user = $user=User::where('email',$request->email)->first();
                        $user->password = bcrypt($request->password);
                        $user->remember_token = NULL;
                        
                        $user->save();
                        return redirect()->to("forum");
    }
}

   public function resetPassword(){
    $this->message = "";
    $this->email = "";
        $this->resetPassword = !$this->resetPassword;
   }
   
   
   public function sendMail(){
    
    if($user=User::where('email',$this->email)->first()){
        $this->message = "";
        $this->message = "şifre sıfırlama başarıyle gonderildi";
        $this->token = Str::random(60);
        $user->remember_token = $this->token;
        
        $user->save();
        $this->token = "http://".$_SERVER['HTTP_HOST']."/sifre_sifirlama?"."email=".$this->email."&"."token=".$this->token;
        Mail::to($this->email)->send(new resetpassword(["email"=>$this->email,"token"=>$this->token]));
        
        $this->email = "";
        $this->resetpassword();
    }

            
    else{
        
        
        $this->message = "böyle bir kullanıcı yok";
    }
}
}
