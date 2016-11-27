<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          ['name' => 'Virtual VPS - Small', 'category_id' => '1'],
          ['name' => 'Virtual VPS - Medium', 'category_id' => '1'],
          ['name' => 'Virtual VPS - Large', 'category_id' => '1'],

          ['name' => 'HP DL180G6', 'category_id' => '2'],
          ['name' => 'Dell R510 - Large', 'category_id' => '2'],

          ['name' => 'Webhoting - Small', 'category_id' => '3'],
          ['name' => 'Webhoting - Medium', 'category_id' => '3'],
          ['name' => 'Webhoting - Large', 'category_id' => '3'],
        ];

        $table = DB::table('products');
        $table->delete();
        $table->insert($data);
    }
}
