<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // ['name' => ''],
            ['name' => 'Fibernet XL'],
            ['name' => 'iFiber'],
            ['name' => 'Small'],
            ['name' => 'Medium'],
            ['name' => 'Large'],
            ['name' => 'Small Cloud'],
            ['name' => 'Medium Cloud'],
            ['name' => 'Large Cloud'],
        ];
        
        $table = DB::table('products_categories'); 
        $table->delete(); 
        $table->insert($data);
    }
}
