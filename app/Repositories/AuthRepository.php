<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Interfaces\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface {

    public function storeNewUser(array $userData){
        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password'])
        ]);

        if($userData['profile_img']) {
            $profile_img =$userData['profile_img'];
            $profile_img_path = Storage::disk('public')->put('profiles', $profile_img);
            $user->profile_img_url = Storage::url($profile_img_path);
            $user->save();
        }

        return $user;
    }
}
