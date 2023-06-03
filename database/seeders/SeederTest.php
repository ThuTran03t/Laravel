<?php


namespace Database\Seeders\DB;

use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\Faker;

/**
 * Summary of SeederTest
 */
class SeederTest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        for ($i=0; $i < 100 ; $i++) { 
            DB::table('categories')->insert([
                'name' => $fake->name,
                'description' => $fake->text
            ]);
        }
    }
}
