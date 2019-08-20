<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       
            DB::table('comments')->insert([
                
                [
                    'user_id'=>'121',
                    'product_id'=>'123',
                    'content'=>'adadaddd'
                   
                ],
                 [
                    'user_id'=>'121',
                    'product_id'=>'125',
                    'content'=>'adadaddd'
                   
                ],
                 [
                    'user_id'=>'22',
                    'product_id'=>'122',
                    'content'=>'adadaddd'
                   
                ]
                            
                
            ]);
        }   
     
}
