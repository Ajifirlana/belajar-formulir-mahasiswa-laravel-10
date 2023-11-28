<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;
class LoginController extends Controller
{
    
    public function index()
    {
        
        return view('welcome');
    }
    public function login()
    {
        
        return view('login');
    }
    public function aksi_login(Request $request)
    {
        $this->validate($request, ['username' => 'required','password' => 'required']);
        
        $username = $request->input('username');
        $password = $request->input('password');
        $user = DB::table('users')->where(['username'=>$username,'password'=>$password])->first();
            
        if($user){
            
            Auth::loginUsingId($user->id);
            return redirect()->intended('/dashboard')
            ->withSuccess('You have successfully logged in!');
                
        }else{
            return back()->withErrors(array("login"=>"Username dan Password Tidak Sesuai!"));
        }

    }
    public function dashboard()
    {
        
        $record = User::find(Auth::user()->id);
        
            return view('dashboard',array("record"=>$record));
        
    } 
}
