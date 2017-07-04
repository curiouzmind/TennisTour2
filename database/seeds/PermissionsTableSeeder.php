<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            
            [   
                'id' => 1, 'name' => 'create_player',
                'display_name' => 'Create players',
                'description' => 'Permission to create players'],

            [
                'id' => 2, 'name' => 'edit_player',
                'display_name' => 'Edit players',
                'description'=> 'Permission to edit players'],

            [
                'id' => 3, 'name' => 'delete_players',
                'display_name' => 'Delete players', 
                'description' => 'Permission to delete players'],

            [
                'id' => 4, 'name' => 'create_result',
                'display_name' => 'create results',
                 'description' => 'Permission to create results'],

            [
                'id' => 5, 'name' => 'edit_result',
                'display_name' => 'Edit results', 
                'description' => 'Permission to edit results'],

            [
                'id' => 6, 'name' => 'delete_result',
                'display_name' => 'delete results',
                 'description' => 'Permission to delete results'],

            [
                'id' => 7, 'name' => 'create_match',
                'display_name' => 'Create matches', 
                'description' => 'Permission to create match'],

            [
                'id' => 8, 'name' => 'edit_match',
                'display_name' => 'Edit matches', 
                'description' => 'Permission to edit matches'],

            [
                'id' => 9, 'name' => 'delete_match',
                'display_name' => 'Delete results', 
                'description' => 'Permission to delete results'],

        ];

        \DB::table('permissions')->insert($permissions);
    }
}
