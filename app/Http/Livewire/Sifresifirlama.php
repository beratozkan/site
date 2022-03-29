<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Livewire\Component;

class Sifresifirlama extends Component
{
    public $message;
    public $password;
    public $email;
    public $token;
    public $retypepassword;
    public function render()
    {
        return view('livewire.sifresifirlama',["message"=>$this->message]);
    }
    public function userİsValid(Request $request){

        if($this->password != $this->retypepassword){
            $this->message = "şifreler aynı değil";
            $this->password = "";
            $this->retypepassword = "";

        }
        elseif ($this->password == "" || $this->password == " ") {
            $this->message = "şifre alanı boş";
        }
            //$this->message = "şifreler aynı olmalıdır";
            //return redirect("f");
      
            else{
                $user = $user=User::where('email',$this->email)->first();
                $user->password = bcrypt($this->password);
                $user->remember_token = NULL;
                
                $user->save();
                return redirect()->to("forum");
}
    }   
    
}


