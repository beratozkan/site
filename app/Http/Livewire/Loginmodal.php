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
    public $reTypeEmail;
    public $token;
    public $openRegisterMenu=false;
    public $name;
    public $surname;
    public $password;
    public $retypepassword; 
    public $resetPassword =False;
    public $message1;
    public $role;
    public function render()
    {
        
        return view('livewire.loginmodal',["message"=>$this->message1]);
    }
    public function userİsValid(Request $request){
        if($request->password != $request->retypepassword){
            $this->message = "şifreler aynı olmalıdır";
        
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
   public function openRegisterMenu(){
       $this->openRegisterMenu = !$this->openRegisterMenu;
   }
   private function resetFields($inputs){
        foreach($inputs as &$input){
            $input = "";

        }

   }
   public function messages() 
   {
       return [
       'name.required' => 'isim alanı boş kalamaz',
       'surname.required'  => 'soyisim alanı boş kalamaz',
       'email.required'  => 'email alanı  boş kalamaz ',
       'password.required'  => 'şifre alanı boş kalamaz ',
        'email.unique' => 'bu email kullanılyor',
       
       ];}
   public function UserRegister(){
       

        $input =$this->validate([
        'name' => 'required',
        'surname' => 'required',
        
        'password' => 'required',
        'retypepassword' => 'required |same:password',
        'email' => 'required | unique:users,email',
        'reTypeEmail' => 'required | same:email',
    ]);
       if($this->email != $this->reTypeEmail){
           $this->message ="emailler aynı olmalıdır";
       }
       elseif($this->password != $this->retypepassword){
        $this->message = "şifreler aynı olmalıdır";
       }
       else{
        $this->password = bcrypt($this->password);
        User::create(['name' => $this->name, 'surname' => $this->surname,'email' => $this->email,"password"=>$this->password,"role"=>$this->role]);

        $this->message1 = "kayıt başarılı";
        //$this->message1 = array_keys($input);
        $this->openRegisterMenu();
        
       }


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
