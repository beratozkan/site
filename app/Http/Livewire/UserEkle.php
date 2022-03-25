<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;

class UserEkle extends Component
{
    public $name;
    public $surname;
    public $email;
    public $selectedId;
    public $password;
    public $r_password;
    public $role;
    private function resetInputFields(){ 

        $this->name = ''; 
        $this->surname = ''; 
        $this->password="";
        $this->r_password="";
        $this->email = '';}

    public function messages() 
   {
       return [
       'name.required' => 'isim boş kalamaz',
       'surname.required'  => 'soyisim boş kalamaz',
       'email.required'  => 'email  boş kalamaz ',
       'password.required'  => 'şifre boş kalamaz ',
     
        
        'email.unique' => 'bu email kullanılyor',
       
       ];}
       

        
    public function render()
    {
        return view('livewire.user-ekle');
    }
    
    
    public function adduser()
    {
        if($this->password != $this->r_password){
            session()->flash('message', "şifreler aynı olmalıdır"); 
            
        }
        else{
            
            $posts = $this->validate([
                'name' => 'required',
                'surname' => 'required',
                
                'password' => 'required',
                'r_password' => 'required |same:password',
                'email' => 'required | unique:users,email'
            ]);
        if(!$this->role){
            $this->role = "user";
        }
        $this->password = bcrypt($this->password);
        User::create(['name' => $this->name, 'surname' => $this->surname,'email' => $this->email,"password"=>$this->password,"role"=>$this->role]);
        //User::create(['name' => "ab", 'surname' => "abs",'email' => "av","password"=>"a"]);
        
       $this->resetInputFields();
      
       $this->emit(event:"renderpage");
       
      
        
    }}

}
