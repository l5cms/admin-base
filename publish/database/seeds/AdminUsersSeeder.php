<?php

use Illuminate\Database\Seeder;
use App\Models\User as UserModel;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserModel::create([
            'name' => 'nejtr0n',
            'email' => 'a6y@xakep.ru',
            'password' => '123456',
        ]);
    }
}
