<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'picture' => 'https://as2.ftcdn.net/v2/jpg/06/47/67/93/1000_F_647679371_GeSMhvHE4vrRDkABj9JfJ87mvdHCUUP8.jpg',
                'name' => 'John',
                'surname' => 'Doe',
                'position_id' => 1, 
                'short_profile' => 'Experienced Software Developer with a passion for coding and problem-solving.'
            ],
            [
                'picture' => 'https://th.bing.com/th/id/OIP.CO2nkj6Est5du2k66CwDnwHaE8?rs=1&pid=ImgDetMain',
                'name' => 'Jane',
                'surname' => 'Smith',
                'position_id' => 2, 
                'short_profile' => 'Dedicated Product Manager focused on delivering user-friendly solutions and leading cross-functional teams.'
            ],
            [
                'picture' => 'https://i.pinimg.com/originals/b5/e6/d6/b5e6d6c39a235e9f7b2ec8ef12ee565d.jpg',
                'name' => 'Alice',
                'surname' => 'Johnson',
                'position_id' => 3, 
                'short_profile' => 'Creative UX/UI Designer with a keen eye for detail and user-centered design.'
            ],
            [
                'picture' => 'https://as2.ftcdn.net/v2/jpg/06/11/05/41/1000_F_611054157_KzMARuXhI8H0jyPGGEYhUqtsDha2OD2B.jpg',
                'name' => 'Bob',
                'surname' => 'Brown',
                'position_id' => 4, 
                'short_profile' => 'Experienced Project Manager ensuring the seamless execution of projects and on-time delivery.'
            ],
            [
                'picture' => 'https://thumbs.dreamstime.com/z/businessman-posing-office-confident-businessman-posing-office-smiling-camera-178156034.jpg',
                'name' => 'Chris',
                'surname' => 'Davis',
                'position_id' => 5, 
                'short_profile' => 'Results-driven Marketing Specialist skilled in brand strategy, digital marketing, and lead generation.'
            ],
            [
                'picture' => 'https://th.bing.com/th/id/OIP.QUokpzuDd30xHqzgvTKLmQHaJ4?w=500&h=667&rs=1&pid=ImgDetMain',
                'name' => 'Emma',
                'surname' => 'Wilson',
                'position_id' => 6, 
                'short_profile' => 'Detail-oriented Data Analyst with expertise in data visualization, SQL, and reporting.'
            ],
            [
                'picture' => 'https://thumbs.dreamstime.com/b/success-comes-confidence-portrait-smiling-mature-executive-standing-his-arms-crossed-office-261024438.jpg',
                'name' => 'David',
                'surname' => 'Moore',
                'position_id' => 7, 
                'short_profile' => 'Experienced HR Coordinator with a focus on recruitment, employee relations, and organizational development.'
            ],
            [
                'picture' => 'https://th.bing.com/th/id/OIP.NUiir6AmcuTPz38DfpYBgwHaHM?w=2078&h=2019&rs=1&pid=ImgDetMain',
                'name' => 'Sophia',
                'surname' => 'Taylor',
                'position_id' => 8, 
                'short_profile' => 'Skilled Business Analyst with strong problem-solving abilities and experience in process improvement.'
            ],
            [
                'picture' => 'https://thumbs.dreamstime.com/z/portrait-smiling-business-professional-arms-crossed-standing-office-68191168.jpg',
                'name' => 'James',
                'surname' => 'Anderson',
                'position_id' => 9, 
                'short_profile' => 'Results-oriented Sales Executive specializing in customer acquisition and revenue growth.'
            ],
            [
                'picture' => 'https://lirp.cdn-website.com/4997bda5/dms3rep/multi/opt/team_member_image1-800x1049-518w.jpg',
                'name' => 'Olivia',
                'surname' => 'Martinez',
                'position_id' => 10, 
                'short_profile' => 'Customer Support Representative dedicated to providing excellent customer service and resolving issues promptly.'
            ],
            [
                'picture' => 'https://static.vecteezy.com/system/resources/previews/026/847/842/non_2x/businessman-on-isolated-png.png',
                'name' => 'Liam',
                'surname' => 'García',
                'position_id' => 1, 
                'short_profile' => 'Full-stack Developer with expertise in both front-end and back-end development.'
            ],
            [
                'picture' => 'https://www.trianglepartners.co.uk/wp-content/uploads/2014/03/cardinal_team_4-700x700.jpg',
                'name' => 'Ava',
                'surname' => 'Rodriguez',
                'position_id' => 2, 
                'short_profile' => 'Product Manager with a strong background in agile project management and product lifecycle.'
            ],
            [
                'picture' => 'https://th.bing.com/th/id/OIP.qHmFvn9CTYQzFTEWwnNx6AHaHa?rs=1&pid=ImgDetMain',
                'name' => 'Mason',
                'surname' => 'Lopez',
                'position_id' => 3, 
                'short_profile' => 'UX/UI Designer with a passion for creating intuitive user interfaces and engaging experiences.'
            ],
            [
                'picture' => 'https://lirp.cdn-website.com/4997bda5/dms3rep/multi/opt/team_member_image1-800x1049-518w.jpg',
                'name' => 'Isabella',
                'surname' => 'Hernandez',
                'position_id' => 4, 
                'short_profile' => 'Project Manager with expertise in coordinating cross-functional teams and managing timelines.'
            ],
            [
                'picture' => 'https://th.bing.com/th/id/R.3567f63f3800f37dc44de20b37daa79a?rik=BT416g5s9Piixg&pid=ImgRaw&r=0',
                'name' => 'Ethan',
                'surname' => 'Nguyen',
                'position_id' => 5, 
                'short_profile' => 'Creative Marketing Specialist skilled in content creation, SEO, and social media marketing.'
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}
