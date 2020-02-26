<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert(array(
            array(
              'title' => 'Migration and Seeder',
              'body' => 'Laravel',
            ),
            array(
              'title' => 'Adding multiple data in seeder',
              'body' => 'Laravel33',
            ),
          ));
    }
}
