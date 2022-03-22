<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
class ShowUsers extends Component
{
   
    public $name;
    public $surname;
    public $email;
    public $selected_id;
    public $name1;
    public $surname1;
    public $email1;
    public $deletecon=false;
    public $passwd;
    public $r_passwd;
    public $update1 = false;
    protected $rules = [
        'name'=>'required',
        'surname'=>'required',
        'email'=>'required|email',
        
    ];
  
  
    
    public function render()
    {
        $users = User::select('id','name')->get();
        return view('livewire.show-users',[
            'users' => User::paginate(10),
        ]);
    }
    public function del1($id){
        $this->deletecon = true;
        $this->selected_id = $id;
    }
    public function del2(){
        $this->deletecon = false;
       
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        if($this->update1){
            $this->update1 = false;
            $this->resetInputFields();
            $this->deletecon = false;
        }
    }
  
    private function resetInputFields(){ 

        $this->name = ''; 
        $this->surname = ''; 
        $this->passwd ="";
        $this->r_passwd="";
        $this->email = '';}
   
    public function adduser()
    {
        if($this->passwd != $this->r_passwd){
            session()->flash('message', "şirfreler aynı olmalıdır"); 
            
        }
        else{
            
            $posts = $this->validate([
                'name' => 'required',
                'surname' => 'required',
                
                'passwd' => 'required',
                'r_passwd' => 'required |same:passwd',
                'email' => 'required | unique:users,email'
            ]);
            
        User::create(['name' => $this->name, 'surname' => $this->surname,'email' => $this->email,"password"=>$this->passwd]);
        //User::create(['name' => "ab", 'surname' => "abs",'email' => "av","password"=>"a"]);
        
        $this->resetInputFields(); 
      
        
    }}
    public function edit($id)
    {
        
        $user1 = User::findOrFail($id);
        $this->selected_id = $id;
        $this->name1 = $user1->name;
        $this->surname1 = $user1->surname;
        $this->email1 = $user1->email;
        $this->update1 = true;

    }


   
   public function messages() 
   {
       return [
       'name.required' => 'isim boş kalamaz',
       'surname.required'  => 'soyisim boş kalamaz',
       'email.required'  => 'email  boş kalamaz ',
       'passwd.required'  => 'şifre boş kalamaz ',
       'name1.required' => 'isim boş kalamaz',
       'surname1.required'  => 'soyisim boş kalamaz',
       'email1.required'  => 'email  boş kalamaz ',
        'email1.unique' => 'bu email kullanılyor',
        'email.unique' => 'bu email kullanılyor',
       
   ];
   }
    public function update()
    {
        
        $this->validate([
            'selected_id' => 'required',
            'name1' => 'required',
            'surname1' => 'required',
            'email1' => 'required|unique:users,email,'. $this->selected_id,
            
        ]);
        if ($this->selected_id) {
            $user = User::find($this->selected_id);
            $user->update([
                'name' => $this->name1,
                'surname' => $this->surname1,
                'email' => $this->email1,
               
            ]);

       
            $this->resetInputFields(); 
            $this->update1 = false;
        }
    }
}
