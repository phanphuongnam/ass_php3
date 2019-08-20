<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                
                [
                    'name'=>'PPN',
        			'category_id'=>'2',
        			'description'=>'123cns',
        			'price'=>'120000',
        			'sale_percent'=>'123',
        			'stocks'=>'343',
        			'is_active'=>'22'
                   
                ]
                            
                
            ]);  
        }
}
