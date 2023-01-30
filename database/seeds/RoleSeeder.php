<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $check = Role::get()->isEmpty();

        $roles = [
            'Super Admin',
            'Admin',
        ];

        if ($check) {

            foreach ($roles as $key => $role) {
                Role::firstOrCreate([
                    'name'            => $role,
                    'guard_name'    => 'web',
                ]);
            }
        } else {

            $this->command->info('data sudah ada');
        }
    }
}
