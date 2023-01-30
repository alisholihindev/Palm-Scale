<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model      = User::get();
        $roles      = Role::get();

        if ($model->isEmpty()) {

            foreach ($roles as $key => $role) {
                $user = User::create([
                    'name'          => $role->name,
                    'email'         => str_replace(' ', '-', strtolower($role->name)) . '@gmail.com',
                    'password'      => Hash::make('123123'),
                ]);
                $user->assignRole($role->id);
            }
        } else {

            $this->comman->info('data sudah ada');
        }
    }
}
