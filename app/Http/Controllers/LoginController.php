<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public $enable_query_log;
    public function __constructs(){
        // parent::__constructs();
       $this->enable_query_log = DB::enableQueryLog();
    }
    
    public function index(){
        
        $company = DB::table('company')->first();
        return view('login',['company'=>$company]);
    }

    public function loginAuth(Request $request){
        
        $roles = [
            'username'=>'required|min:6',
            'password'=>'required|min:6|string'
        ];

        $message = [
            'username.require'=>'username tidak boleh kosong',
            'password.require'=>'password tidak boleh kosong'
        ];

        $this->validate($request,$roles,$message);

        $data = [
            'username'=>$request->username,
            'password'=>$request->password
        ];   
        
        $user_gruop = DB::table('user')
                        ->join('group','user.id_group','=','group.id_group')
                        ->select('user.username','user.password','group.groupname')
                        ->where([
                            'user.username'=>$data['username'],
                            'user.password'=>$data['password']
                        ])
                        ->get();
                        
        dd(\Auth::attempt([
            'email'=>$data['username'],
            'password'=>$data['password']
        ]));
    }

    public function hash(){
        echo Hash::make('123456');
    }

    public function logout(){
        // Auth::loguot();
        // return redirect()->redirect('/');
    }
}
