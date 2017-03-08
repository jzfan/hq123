<?php

use Wx\Loan\Car;
use Wx\File\File;
use Wx\Loan\Fund;
use Wx\User\User;
use Wx\Loan\Apply;
use Wx\Loan\House;
use Wx\Loan\Business;
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
        Car::truncate();
        House::truncate();

        $users = factory(User::class, 22)->create();
        User::first()->update(['phone'=>'13333333333']);
        
        foreach ($users as $user) {
            $car = factory(Car::class)->create(['user_id'=>$user->id]);
            foreach (range(0, mt_rand(1,2)) as $index) {
                factory(File::class)->create([
                    'fileable_id'=>$car->id, 
                    'fileable_type'=>'Wx\Loan\Car'
                ]);
            }

            $house = factory(House::class)->create(['user_id'=>$user->id]);
            foreach (range(0, mt_rand(1,2)) as $index) {
                factory(File::class)->create([
                    'fileable_id'=>$house->id, 
                    'fileable_type'=>'Wx\Loan\House'
                ]);
            }

            $fund = factory(Fund::class)->create(['user_id'=>$user->id]);
            foreach (range(0, mt_rand(1,2)) as $index) {
                factory(File::class)->create([
                    'fileable_id'=>$fund->id, 
                    'fileable_type'=>'Wx\Loan\Fund'
                ]);
            }

            $fund = factory(Business::class)->create(['user_id'=>$user->id]);
            foreach (range(0, mt_rand(1,2)) as $index) {
                factory(File::class)->create([
                    'fileable_id'=>$fund->id, 
                    'fileable_type'=>'Wx\Loan\Business'
                ]);
            }
        }

    }
}
