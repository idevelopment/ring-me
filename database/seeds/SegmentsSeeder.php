<?php

use Illuminate\Database\Seeder;

class SegmentsSeeder extends Seeder
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
          ['name' => 'Company', 'callback_sla' => '5'],
          ['name' => 'Private', 'callback_sla' => '5']
      ];

      $table = DB::table('customers_segments');
      $table->delete();
      $table->insert($data);
    }
}
