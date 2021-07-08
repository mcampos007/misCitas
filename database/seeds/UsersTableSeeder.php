<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Mario Campos',
            'email' => 'mcampos@gmail.com',
            'password' => bcrypt('123123'),
            'dni' => '17792794',
            'address' => '',
            'phone' => '',
            'role' => 'admin'
        ]);
        factory(User::class, 50)->create();
    }
}
