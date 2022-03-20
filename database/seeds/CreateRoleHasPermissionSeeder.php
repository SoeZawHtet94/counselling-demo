<?php

use Illuminate\Database\Seeder;

class CreateRoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->truncate();
        DB::table('role_has_permissions')->insert(array(
            array(
                "permission_id" => 1,
                "role_id" => 1,
            ),
            array(
                "permission_id" => 2,
                "role_id" => 1,
            ),
            array(
                "permission_id" => 3,
                "role_id" => 1,
            ),
            array(
                "permission_id" => 4,
                "role_id" => 1,
            ),
        ));
    }
}
