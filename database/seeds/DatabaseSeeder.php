<?php

use Wx\Loan\Car;
use Wx\File\File;
use Wx\Loan\Fund;
use Wx\Loan\Loan;
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
        User::first()->update(['role'=>'admin', 'phone'=>13333333333]);
        User::orderBy('id')->skip(1)->first()->update(['role'=>'editor', 'phone'=>14444444444]);
        
        foreach (range(1, 3) as $index) {
            $car = factory(Car::class)->create();
            $car->loan()->save(factory(Loan::class)->make());
            foreach (range(0, mt_rand(1,2)) as $index) {
                factory(File::class)->create([
                    'fileable_id'=>$car->id, 
                    'fileable_type'=>'Wx\Loan\Car'
                ]);
            }

            $house = factory(House::class)->create();
            $house->loan()->save(factory(Loan::class)->make());
            foreach (range(0, mt_rand(1,2)) as $index) {
                factory(File::class)->create([
                    'fileable_id'=>$house->id, 
                    'fileable_type'=>'Wx\Loan\House'
                ]);
            }

            $fund = factory(Fund::class)->create();
            $fund->loan()->save(factory(Loan::class)->make());
            foreach (range(0, mt_rand(1,2)) as $index) {
                factory(File::class)->create([
                    'fileable_id'=>$fund->id, 
                    'fileable_type'=>'Wx\Loan\Fund'
                ]);
            }

            $Business = factory(Business::class)->create();
            $Business->loan()->save(factory(Loan::class)->make());
            foreach (range(0, mt_rand(1,2)) as $index) {
                factory(File::class)->create([
                    'fileable_id'=>$Business->id, 
                    'fileable_type'=>'Wx\Loan\Business'
                ]);
            }
        }

    }
}
