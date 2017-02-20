<?php

use Wx\User\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::truncate();
        factory(User::class, 22)->create();
        User::first()->update(['phone'=>'13333333333']);
    }
}
