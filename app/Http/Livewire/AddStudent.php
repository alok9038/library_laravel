<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AddStudent extends Component
{

    public $name, $email, $aadhaar, $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'aadhaar' => 'required|size:12',
        'password' => 'required|min:8',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function clear(){
        $this->name =  $this->aadhaar = $this->email = $this->password = "";
    }

    public function save(){
        $data = $this->validate();

        User::create($data);

        $this->clear();
    }
    public function render()
    {
        return view('livewire.add-student');
    }
}
