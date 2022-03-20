<?php

use Illuminate\Database\Seeder;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->truncate();
        DB::table('category')->insert(array(
            array(
                "category_name" => "Healthy",
            ),
            array(
                "permission_id" => "Business",
            ),
            array(
                "permission_id" => "Law",
            ),
            array(
                "permission_id" => "Other",
            ),
        ));
    }
}
