<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // \DB::table('users')->delete();
        
        
        $users = [
        	[	
                'name' 		=> 'Admin1',
                'email' 	=> 'admin@admin.com',
                'password' 	=> bcrypt('password'), 
                'remember_token' => null,
                'created_at' => '2017-04-02 12:42:19',
                'updated_at' => '2017-04-01 13:42:19',
            ],
         	[
                'name' 		=> 'Admin2',
                'email' 	=> 'bolaji@admin.com',
                'password' 	=> bcrypt('password'), 
                'remember_token' => null,
                'created_at' => '2017-04-03 13:46:19',
                'updated_at' => '2017-04-05 14:42:19',
            ],
       ];
       
    	\DB::table('users')->insert($users);
	}
}
