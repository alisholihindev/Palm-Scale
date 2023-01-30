<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    		try {

    			DB::beginTransaction();

    			$this->call(RoleSeeder::class);
    			$this->call(UserSeeder::class);

    			DB::commit();

    		} catch (Exception $e) {

    			DB::rollback();
    			throw $e;

    		}
    }
}
