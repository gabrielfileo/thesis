<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //dummy data for users table (1 admin, 5 trainees)
        DB::table('users')->delete();
        DB::table('users')->insert(
          ['username' => 'admin', 'name' => 'Administrator', 'role' => 'administrator', 'password'=> bcrypt('test1234') ]);
          factory(App\User::class, 5)->create();

        //dummy data for topics table
        DB::table('topics')->delete();
        DB::table('topics')->insert([
          ['name' => 'Adobe Photoshop', 'description' =>'Adobe Photoshop is a raster graphics editor developed and published by Adobe Systems for macOS and Windows. Photoshop was created in 1988 by Thomas and John Knoll.'],
          ['name' => 'Adobe Illustrator', 'description' =>'Adobe Illustrator is a vector graphics editor developed and marketed by Adobe Systems. The latest version, Illustrator CC 2015.3, is the twentieth generation in the product line.']
        ]);
    }
}
