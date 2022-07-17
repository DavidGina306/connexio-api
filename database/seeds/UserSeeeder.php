<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'admin',
            'email' => 'admin@connexio.com',
            'password' => 'Abc@1234',
        ]);
    }
}
