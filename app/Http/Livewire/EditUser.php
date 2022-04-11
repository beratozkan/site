<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class EditUser extends Component
{

    public $name;
    public $surname;
    public $email;
    public $user;
    public $selectedId;
    public $update = false;
    protected $listeners = ['userEdit' => 'edit'];
    public function render()
    {
        return view('livewire.edit-user');
    }

        protected $rules = [
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email',
            
        ];
       
        public function edit($id)
        {
            
            $user = User::findOrFail($id);
            $this->selectedId = $id;
            $this->name = $user->name;
            $this->surname = $user->surname;
            $this->email = $user->email;
            $this->update = true;

        }


        public function update()
        {
            
            $this->validate([
                'selectedId' => 'required',
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required|unique:users,email,'. $this->selectedId,
                
            ]);
            if ($this->selectedId) {
                $user = User::find($this->selectedId);
                $user->update([
                    'name' => $this->name,
                    'surname' => $this->surname,
                    'email' => $this->email,
                
                ]);

        
                
                $this->emit('changeUpdate');
            }
        }
}
