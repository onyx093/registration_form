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
        // send_mail_to_newly_registered_users($user, $user);

        /* The commented function from the helper file send emails to the new users after registration but the app uses model events to dispatch emails to new users */


        Auth::login($user);
        return redirect(route('dashboard'));

    }
}
