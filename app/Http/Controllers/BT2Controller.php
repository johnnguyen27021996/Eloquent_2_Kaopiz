<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Phone;
use App\Role;

class BT2Controller extends Controller
{
    public function index()
    {
    return view('bt2_index');
    }

    public function search(Request $request)
    {
        $array = array();
        $user_id = $request->input('user_id');
        $number = $request->input('number');
        $role_name = $request->input('role_name');

        $user = User::where('id', $user_id)->get()->toArray();
        $phone = Phone::where('number', $number)->get();
        $role = Role::where('name', $role_name)->get();
        if(count($user) > 0){
            foreach ($user as $data){
                array_push($array, $data);
            }
        }
        if(count($phone) > 0){
            $data_phone = Phone::find($phone[0]['id'])->user()->get()->toArray();
            foreach ($data_phone as $data){
                array_push($array, $data);
            }
        }
        if(count($role) > 0){
            $data_role = Role::find($role[0]['id'])->user()->get()->toArray();
            foreach ($data_role as $data){
                array_push($array, $data);
            }
        }
        return redirect()->route('bt2.show')->with('data', $array);
    }
}
