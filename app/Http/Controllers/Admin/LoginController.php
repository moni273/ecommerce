<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login');
    }

    public function submit(Request $request)
    {
        $email = $request->email;

        $password = $request->password;

        $user = User::where('email',$email)->first();
        // dd($user);
        if(!empty($user)){
            
            $check_password = Hash::check($password, $user->password);

            if($check_password){
                if($user->role == ADMIN_ROLE){

                    Auth::attempt(array('email' => $email, 'password' => $password));

                    return redirect()->route('admin.dashboard');
                }elseif($user->role == USER_ROLE){
                    Auth::attempt(array('email' => $email, 'password' => $password));
              
                    return redirect()->route('product.list');  
                } 
                else {

                    return redirect()->back()->with('danger','Please enter valid credentials');
                }
            } else {

                return redirect()->back()->with('danger','Please enter valid credentials');
            }
        } else {

            return redirect()->back()->with('danger','Entered details not found');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('message','You have successfully logged out!');
    }
}
