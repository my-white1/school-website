<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $username, $password, $user_yoq = false, $null = false;

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];
    protected $messages = [
        'password.required' => "Parol kiritilmadi.",
        'username.required' => "Foydalanuvchi nomi kiritilmadi.",
    ];


    public function login()
    {
        $this->validate();
        $user = User::where('username', $this->username)->first();

        if ($user) {
            if (Hash::check($this->password, $user->password)) {
                $this->user_yoq = false;
                if ($user->school_id == env('SCHOOL_ID')) {
                    Auth::login($user);
                }
                return redirect()->route('admin');
            } else {
                $this->user_yoq = true;
            }
        } else {
            $this->user_yoq = true;
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
