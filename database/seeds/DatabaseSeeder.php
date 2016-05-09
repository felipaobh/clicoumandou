<?php

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

        DB::table('admins')=> insert([
        	'name'=> 'Carlos Admin',
        	'email'=> 'carlos@adm.com.br',
        	'password'=> Hash::make('123456'),
        ]);
    }
}
