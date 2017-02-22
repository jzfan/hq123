<?php

use Wx\File\File;
use Wx\User\User;
use Wx\Loan\Loan;
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
        Loan::truncate();
        factory(User::class, 22)->create()->each( function ($u) {
            $u->file()->save( factory(File::class)->make() );
            $u->loans()->save( factory(Loan::class)->make(['name' => $u->name]) );
        });
        User::first()->update(['phone'=>'13333333333']);
    }
}
