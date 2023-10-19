<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate tabels/ maak tabellen eerst leeg
        $user = User::factory()->create([
            'name' => 'Marco Neumann'    // overide en maak user met deze naam
        ]);
       
        Post::factory(5)->create([
            'user_id' => $user->id // override en koppel deze user aan de Post
        ]);

    }
}
