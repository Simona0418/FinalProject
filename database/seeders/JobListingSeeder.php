<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobsListing;

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $jobs = [
            [
                'title' => 'Software Developer',
                'description' => 'Responsible for building and maintaining web applications.',
                'type' => 'Full time',
                'work_mode' => 'Hybrid',
                'location' => 'New York, NY',
            ],
            [
                'title' => 'Product Manager',
                'description' => 'Lead the development of new products and features.',
                'type' => 'Full time',
                'work_mode' => 'On-site',
                'location' => 'San Francisco, CA',
                'created_at' => now()->subMonths(2), 
            ],
            [
                'title' => 'Graphic Designer',
                'description' => 'Create visual concepts to communicate ideas that inspire, inform, or captivate consumers.',
                'type' => 'Part time',
                'work_mode' => 'Hybrid',
                'location' => 'Los Angeles, CA',
                'created_at' => now()->subMonths(3),
            ],
            [
                'title' => 'Data Analyst',
                'description' => 'Analyze and interpret complex data to help the company make informed decisions.',
                'type' => 'Full time',
                'work_mode' => 'Hybrid',
                'location' => 'Chicago, IL',
                'created_at' => now()->subMonths(6), 
            ],
            [
                'title' => 'Customer Support Representative',
                'description' => 'Provide support to customers via email, chat, and phone.',
                'type' => 'Full time',
                'work_mode' => 'On-site',
                'location' => 'Austin, TX',
                'created_at' => now()->subMonths(7), 
            ],
            [
                'title' => 'Marketing Specialist',
                'description' => 'Plan and execute marketing strategies to increase brand awareness.',
                'type' => 'Part time',
                'work_mode' => 'Hybrid',
                'location' => 'Miami, FL',
                'created_at' => now()->subMonths(4), 
            ],
            [
                'title' => 'HR Coordinator',
                'description' => 'Assist with recruitment, employee relations, and training programs.',
                'type' => 'Full time',
                'work_mode' => 'On-site',
                'location' => 'Seattle, WA',
                'created_at' => now()->subMonths(1), 
            ],
            [
                'title' => 'UX/UI Designer',
                'description' => 'Design user interfaces and optimize the user experience for web applications.',
                'type' => 'Full time',
                'work_mode' => 'Hybrid',
                'location' => 'Boston, MA',
                'created_at' => now()->subMonths(5), 
            ],
            [
                'title' => 'Backend Developer',
                'description' => 'Develop server-side logic, databases, and APIs for web applications.',
                'type' => 'Full time',
                'work_mode' => 'On-site',
                'location' => 'Denver, CO',
                'created_at' => now()->subMonths(9), 
            ],
            [
                'title' => 'Sales Executive',
                'description' => 'Generate new sales opportunities and close deals with new clients.',
                'type' => 'Part time',
                'work_mode' => 'Hybrid',
                'location' => 'San Diego, CA',
                'created_at' => now()->subMonths(8),
            ],
        ];

        foreach ($jobs as $job) {
            JobsListing::create($job);
        }
    }
}
