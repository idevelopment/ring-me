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
          ['name' => 'Cloud Hosting'],
          ['name' => 'Dedicated Servers'],
          ['name' => 'Webhosting'],
        ];

        $table = DB::table('products_categories');
        $table->delete();
        $table->insert($data);
    }
}
