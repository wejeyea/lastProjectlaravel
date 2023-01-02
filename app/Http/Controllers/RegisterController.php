<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class RegisterController extends Controller
{
    public function RegisterPage(){
        return view('register');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'conf_pass' => 'required|same:password|min:6',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'country' => 'required|min:6',
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $gender = $request->gender;
        $dob = $request->dob;
        $country = $request->country;

        // User::insert([
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => $password,
        //     'gender' => $gender,
        //     'dob' => $dob,
        //     'country' => $country,
        // ]);

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->gender = $gender;
        $user->dob = $dob;
        $user->country = $country;
        $user->save();

        return redirect('/home');
    }
}
