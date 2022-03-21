<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User; 
use Illuminate\Support\Facades\DB;


class ShowPosts extends Component
{

   
   
    public $name;   
    public $email;
    public $surname;
    public $passwd;
    public $r_passwd;
   
    protected $rules = [
        'name'=>'required',
        'surname'=>'required',
        'email'=>'required',
       
    ];
  
  
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    private function resetInputFields(){ 

        $this->name = ''; 
        $this->surname = ''; 

        $this->email = ''; 

      

    } 

}
