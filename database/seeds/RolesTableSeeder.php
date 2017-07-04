<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            
            [
                'id' => 1, 'name' => 'admin',
                'display_name' => 'Administrator',
                'description'=> 'This is the general Admin'],

            [
                'id' => 2, 'name' => 'Simple_user',
                'display_name' => 'user', 
                'description' => 'Normal user'],

            [
                'id' => 3, 'name' => 'delete_admin',
                'display_name' => 'Delete Admin',
                 'description' => 'Admin with delete permissions'],

        ];

        \DB::table('roles')->insert($roles);
    }
}
