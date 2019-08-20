<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                
                [
                   'first_name'=>'dien thoai',
			        'last_name'=>'dien thoai',
			        'email'=>'dien thoai',
			        'password'=>'dien thoai',
			        'address'=>'dien thoai',
			        'birth_day'=>'dien thoai',
			        'is_active'=>'dien thoai'
                   
                ]
              
                
            ]);
    }
}
