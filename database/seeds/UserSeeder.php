<?php

use App\User;
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
        $users = [
            [
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => '$2y$12$rUPLQzRWg.IPahMYah4Yt.zSZ9QsWLMTrE6EX4PbKpkR.yLRakz72'
            ],
            [
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'password' => '$2y$12$rUPLQzRWg.IPahMYah4Yt.zSZ9QsWLMTrE6EX4PbKpkR.yLRakz72'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
