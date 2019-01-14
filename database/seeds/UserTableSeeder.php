<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\User::class, 8)->create()->each(function($u) {
            $u->projects()->save(factory(App\Project::class)->make());
		});

    }
}