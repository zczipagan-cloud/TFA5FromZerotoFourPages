<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id'=>1, 'name'=>'Admin User', 'email'=>'admin@pos.test', 'role'=>'Administrator', 'status'=>'Active'],
            ['id'=>2, 'name'=>'Cashier One', 'email'=>'cashier1@pos.test', 'role'=>'Cashier', 'status'=>'Active'],
            ['id'=>3, 'name'=>'Cashier Two', 'email'=>'cashier2@pos.test', 'role'=>'Cashier', 'status'=>'Active'],
            ['id'=>4, 'name'=>'Manager User', 'email'=>'manager@pos.test', 'role'=>'Manager', 'status'=>'Active'],
            ['id'=>5, 'name'=>'Staff User', 'email'=>'staff@pos.test', 'role'=>'Staff', 'status'=>'Inactive'],
        ];
        return view('users.index', compact('users'));
    }
}
