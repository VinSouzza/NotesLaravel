<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //criando usuários
        DB::table('users')->insert([
            [
                'username' => 'user1@teste.com',
                'password' => bcrypt('adc123456'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'user2@teste.com',
                'password' => bcrypt('adc123456'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'user3@teste.com',
                'password' => bcrypt('adc123456'),
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
