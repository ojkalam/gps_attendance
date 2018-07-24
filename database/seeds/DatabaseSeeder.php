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
         //$this->call(UsersTableSeeder::class);
    	 DB::table('users')->insert([
    	 	[

        	'name' => "Tipu Sultan",
        	'email'=> 'tipu'.'@gmail.com',
        	'password'=>bcrypt('123')

        	],
        	[

        	'name' => "Abul Kalam",
        	'email'=> 'kalam'.'@gmail.com',
        	'password'=>bcrypt('123')

        	]

    	]);

    	DB::table('batches')->insert([
    		[
        	'subject_id' => 1,
        	'name'=> 'top-up-php'
        	],
        	[
        	'subject_id' => 2,
        	'name'=> 'top-up-java'
        	]
    	]);
    	DB::table('subjects')->insert([
    		[
        	'name'=> 'php'
        	],
        	[
        	'name'=> 'java'
        	]
    	]);
    	DB::table('attendances')->insert([
    		[
        	'user_id'=> 1,
        	'batch_id'=> 1,
        	'attendee'=> 50,
        	'location'=> 'Iubat Rd, Dhaka',
        	'latlong'=> '90.5488878,24.56487987'
        	],
        	[
        	'user_id'=> 2,
        	'batch_id'=> 2,
        	'attendee'=> 40,
        	'location'=> 'Bamnettek Rd, Dhaka',
        	'latlong'=> '92.5488878,25.56487987'
        	]
    	]);

        DB::table('assigned_tasks')->insert([
            [
            'user_id'=> 1,
            'batch_id'=> 1,
            'schedule_date'=> '2018-03-20',
            ],
           [
            'user_id'=> 1,
            'batch_id'=> 2,
            'schedule_date'=> '2018-03-21',
            ],
        ]);
    }
}
