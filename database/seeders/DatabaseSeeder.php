<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Entry;
use App\Models\Education;
use App\Models\Job;
use App\Models\Skill;
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
        
        User::truncate();
        Type::truncate();
        // projects and skills have a many to many relationship
        Project::truncate();
        Entry::truncate();
        Education::truncate();
        Job::truncate();
        Skill::truncate();

        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Entry::factory()->count(4)->create();
        Education::factory()->count(4)->create();
        Job::factory()->count(2)->create();
        Skill::factory()->count(4)->create();
    }
}
