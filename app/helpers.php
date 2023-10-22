<?php

use App\Models\User;
use App\Notifications\NewUserRegistrationNotification;

if(!function_exists("send_mail_to_newly_registered_users")){

    function send_mail_to_newly_registered_users(User $user){
        $user->notifyNow(new NewUserRegistrationNotification($user));
    }

}
