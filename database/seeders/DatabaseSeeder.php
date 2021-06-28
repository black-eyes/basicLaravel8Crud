<?php

namespace Database\Seeders;

use App\Models\Supplier;
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
        // \App\Models\User::factory(10)->create();
        $faker = \Faker\Factory::create();
        for($i=0 ;$i<100;$i++)
        {

            $su = new Supplier();
            $su::create([
                'supplier_name' =>$faker->name,
                'supplier_phone_no'=>$faker->phoneNumber,
                'supplier_email_no'=>$faker->email,
                'supplier_address'=>$faker->address,
                'supplier_pincode'=>$faker->postcode,
                'status'=>"Active"
            ]);


        }
    }
}
