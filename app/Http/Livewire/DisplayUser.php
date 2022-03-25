<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class DisplayUser extends Component
{
   
    public $name;
    public $surname;
    public $email;
    public $selectedId;
    
    public $confirmdelete=false;
    public $password;
    public $r_password;
    public $update = false;
    protected $rules = [
        'name'=>'required',
        'surname'=>'required',
        'email'=>'required|email',
        
    ];
    
    protected $listeners = ['renderpage' => 'render','changeUpdate'=>'edit'];

    
    public function render()
    {
        $users = User::select('id','name')->get();
        return view('livewire.display-user',[
            'users' => User::paginate(10),
        ]);
    }
    public function logout(Request $request){
        
        Auth::logout();
        $request->session()->flush();
        return redirect("/login");
    }
    
    public function deleteconfirm($id){
        $this->confirmdelete = true;
        $this->selectedId = $id;
    }
    public function deletecancel(){
        $this->confirmdelete = false;
       
    }
    public function approvedelete($id){
        $user = User::find($id);
        $user->delete();
        if($this->update){
            $this->update = false;
            $this->resetInputFields();
            $this->confirmdelete = false;
        }
    }
  
  
  
    public function edit($id=NULL)
    {
        if($id)
        {
            $this->update = true;
            $this->selectedId = $id;
            $this->emit("userEdit", $this->selectedId);
        }
        else{
            $this->update = false;
        } 
    }

   public function messages() 
   {
       return [
       'name.required' => 'isim boş kalamaz',
       'surname.required'  => 'soyisim boş kalamaz',
       'email.required'  => 'email  boş kalamaz ',
       'password.required'  => 'şifre boş kalamaz ',
       
        'email.unique' => 'bu email kullanılyor',
       
   ];
   }
   
    }
