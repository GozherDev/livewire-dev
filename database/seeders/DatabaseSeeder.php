<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([            
            'name' => 'user',
            'email' => "user@exmaple.com",
            'password' => Hash::make('password'),
        ]);
        
        Task::create(['description'=> Str::random(10)]);
        Task::create(['description'=> Str::random(10)]);
        Task::create(['description'=> Str::random(10)]);
        Task::create(['description'=> Str::random(10)]);
        Task::create(['description'=> Str::random(10)]);


    }
}
