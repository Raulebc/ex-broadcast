<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory()->create([
            'name' => 'Dos',
            'email' => 'dos@correo.cl',
            'password' => bcrypt('123123')
        ]);
            
        \App\Models\User::factory()->create([
            'name' => 'Uno',
            'email' => 'uno@correo.cl',
            'password' => bcrypt('123123')
        ]);
        \App\Models\Message::factory(50)->create(['conversation_id' => 1]);

        \App\Models\Conversation::create([
            'from_id' => 1,
            'to_id' => 2,
        ]);
    }
}
