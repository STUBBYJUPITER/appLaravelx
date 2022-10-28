<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();
        $user->name='juanito';
        $user->email='juanito@gmail.com';
        $user->password='123';

        $user->save();

        $user=new User();
        $user->name='halito';
        $user->email='juo@gmail.com';
        $user->password='1234';

        $user->save();

    }
}
