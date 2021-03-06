<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin PerpusKita',
            'email' => 'admin@perpus.kita',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
