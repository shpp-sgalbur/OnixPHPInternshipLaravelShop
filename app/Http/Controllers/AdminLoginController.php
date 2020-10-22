<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminLoginController extends Controller
{
    public function autoAdmin(Request $request) {
        
        //route '/admin'
        
        $user = Auth::user();
        $role_id = $user->role_id;
        
        $users = DB::table('users')->get();
        $roles = DB::table('roles')->get();
        $res = $roles->where('id', $role_id)->first();
        
        if($res != null){
            $role = $res->name;
            var_dump($roles);
            if($role == 'superAdmin') return view('admin.users',['admin'=>$user->name, 'users'=>$users, 'roles'=>$roles]);            
        }
        
       return view('layouts.main');
    }
}
