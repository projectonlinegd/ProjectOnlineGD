<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \DB::table('users')->delete();
        User::create(
                [
                    'mobile_number' => '1749731667',
                    'password' => bcrypt("123456")
                ]
        );
    }

}
