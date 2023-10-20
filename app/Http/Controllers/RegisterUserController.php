<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterUserRequest;
use App\Interfaces\AuthRepositoryInterface;

class RegisterUserController extends Controller
{

    public function __construct(private AuthRepositoryInterface $auth)
    {}

    public function registrationForm(){
        return view('register');
    }

    public function store(RegisterUserRequest $request){
        $user = $this->auth->storeNewUser($request->validated());
        // event(new Registered($user));

        Auth::login($user);
        return redirect(route('dashboard'));

    }
}
