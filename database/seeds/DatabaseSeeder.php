<?php

use Wx\Loan\Car;
use Wx\File\File;
use Wx\User\User;
use Wx\Loan\Apply;
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
        File::truncate();
        Apply::truncate();
        factory(User::class, 22)->create()->each( function ($u) {
            $u->apply()->save( factory(Apply::class)->make(['name' => $u->name]) );
            factory(File::class)->create(['apply_id'=>$u->apply->id]);
        });
        $users = User::inRandomOrder()->take(12)->get();
        foreach ($users as $key => $user) {
            factory(Car::class)->create(['user_id' => $user->id]);
        }
        User::first()->update(['phone'=>'13333333333']);
    }
}
