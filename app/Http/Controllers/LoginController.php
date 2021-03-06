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
        
        $company = DB::table('company');
        $company_arr =[];

        if($company->count() > 0){
            $company_arr = $company->first();
            return view('login',['company'=>$company_arr]);
        }else{
            return view('login',['company'=>$company_arr]);
        }
        //
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
                        
        // dd(\Auth::attempt([
        //     'username'=>$data['username'],
        //     'password'=>$data['password']
        // ]));
        // die;
        return view('dashboard');
        // return redirect()->route('dashboard');
    }

    public function createUser(){
       return view('user_regis');
    }

    public function userRegister(Request $request){

        $roles = [
            'realname'=>'required|string',
            'username'=>'required|min:6',
            'password'=>'required|min:6|string',
            'password_comfirmed'=>'required|min:6|string'
        ];

        $message = [
            'realname.require'=>'username tidak boleh kosong',
            'username.require'=>'username tidak boleh kosong',
            'password.require'=>'username tidak boleh kosong',
            'password_comfirmed.require'=>'password tidak boleh kosong'
        ];

        $this->validate($request,$roles,$message);

        $user = new User;

        $user->realname   = $request->realname;
        $user->username   = $request->username;
        $user->created_at = date('Y-m-d');
        $user->updated_at = null;
        $user->username   = $request->username;
        $user->password   = Hash::make($request->password);

        $user->save();

        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
