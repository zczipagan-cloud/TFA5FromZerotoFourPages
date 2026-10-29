<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id'=>1, 'name'=>'Maria Santos', 'email'=>'maria.santos@example.com', 'phone'=>'0917-555-0101', 'status'=>'Active'],
            ['id'=>2, 'name'=>'Juan Dela Cruz', 'email'=>'juan.delacruz@example.com', 'phone'=>'0917-555-0102', 'status'=>'Active'],
            ['id'=>3, 'name'=>'Angela Reyes', 'email'=>'angela.reyes@example.com', 'phone'=>'0917-555-0103', 'status'=>'Inactive'],
            ['id'=>4, 'name'=>'Carlos Mendoza', 'email'=>'carlos.mendoza@example.com', 'phone'=>'0917-555-0104', 'status'=>'Active'],
            ['id'=>5, 'name'=>'Sofia Garcia', 'email'=>'sofia.garcia@example.com', 'phone'=>'0917-555-0105', 'status'=>'Active'],
        ];
        return view('customers.index', compact('customers'));
    }
}
