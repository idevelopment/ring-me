<?php

use Illuminate\Database\Seeder;

class DepartmentUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        [
          'user_id' => '2',
          'departments_id' => '1'
        ],
      ];

      $table = DB::table('departments_user');
      $table->delete();
      $table->insert($data);
    }

}
