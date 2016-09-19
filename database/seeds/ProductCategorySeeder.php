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
            ['name' => 'Webhosting'],
            ['name' => 'Internet Connection'],
            ['name' => 'Pay-as-you-go'],
        ];

        $table = DB::table('products_categories');
        $table->delete();
        $table->insert($data);
    }
}
