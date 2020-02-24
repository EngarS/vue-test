<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        //
        $data [] = [
            'name' => 'Admin',
            'email' => 'admin@test.ru',
            'password' => bcrypt('qwerty1234'),
        ];
        // Добавляем пользователя в БД
        DB::table('users')->insert($data);
        // Вызов фабрики для генерации пользователей
        factory(\App\User::class, 50)->create();

    }
}
