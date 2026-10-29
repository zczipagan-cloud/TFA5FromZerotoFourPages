<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pos_reference_records')->insert([
            ['record_type'=>'customer','name'=>'Maria Santos','email'=>'maria.santos@example.com','role_or_phone'=>'0917-555-0101','status'=>'Active','created_at'=>now(),'updated_at'=>now()],
            ['record_type'=>'customer','name'=>'Juan Dela Cruz','email'=>'juan.delacruz@example.com','role_or_phone'=>'0917-555-0102','status'=>'Active','created_at'=>now(),'updated_at'=>now()],
            ['record_type'=>'customer','name'=>'Angela Reyes','email'=>'angela.reyes@example.com','role_or_phone'=>'0917-555-0103','status'=>'Inactive','created_at'=>now(),'updated_at'=>now()],
            ['record_type'=>'user','name'=>'Admin User','email'=>'admin@pos.test','role_or_phone'=>'Administrator','status'=>'Active','created_at'=>now(),'updated_at'=>now()],
            ['record_type'=>'user','name'=>'Cashier One','email'=>'cashier1@pos.test','role_or_phone'=>'Cashier','status'=>'Active','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
