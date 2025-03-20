<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;
 

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ['name' => 'Software Developer'],
            ['name' => 'Product Manager'],
            ['name' => 'UX/UI Designer'],
            ['name' => 'Project Manager'],
            ['name' => 'Marketing Specialist'],
            ['name' => 'Data Analyst'],
            ['name' => 'HR Coordinator'],
            ['name' => 'Business Analyst'],
            ['name' => 'Sales Executive'],
            ['name' => 'Customer Support Representative'],
        ];

        foreach ($positions as $position) {
            Position::create($position);
        }
    }
}
