<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceCategories = [
            ['name' => 'Consulting'],
            ['name' => 'Development'],
            ['name' => 'Design'],
            ['name' => 'Marketing'],
            ['name' => 'Customer Support'],
            ['name' => 'Training'],
            ['name' => 'Project Management'],
            ['name' => 'Cloud Services'],
            ['name' => 'Cybersecurity'],
            ['name' => 'Data Analytics'],
        ];

        foreach ($serviceCategories as $serviceCategory) {
            ServiceCategory::create($serviceCategory);
        }
    }
}
