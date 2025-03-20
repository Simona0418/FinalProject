<?php

namespace Database\Seeders;

use App\Models\ContactFormMessage;
use App\Models\User;
use Illuminate\Contracts\Queue\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([RoleSeeder::class,
                    UserSeeder::class,
                    JobListingSeeder::class,
                    PositionSeeder::class,
                    TeamMemberSeeder::class,
                    IndustrySeeder::class,
                    ServiceCategorySeeder::class,
                    ServiceSeeder::class,
                    PartnerSeeder::class,
                    TestimonialSeeder::class,
                    ContactFormMessageSeeder::class
        ]);
    }
}
