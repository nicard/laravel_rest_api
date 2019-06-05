<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(\App\Company::find(1));
        factory(\App\User::class, 1)->create();
        factory(\App\Product::class, 10)->create([
            'user_id' => 1
        ]);

        \Tenant::setTenant(\App\Company::find(2));
        factory(\App\User::class, 1)->create();
        factory(\App\Product::class, 10)->create([
            'user_id' => 2
        ]);

        \Tenant::setTenant(\App\Company::find(3));
        factory(\App\User::class, 1)->create();

    }
}
