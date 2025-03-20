<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'testimonial_text' => 'This company truly transformed our business with their expertise!',
                'client_name' => 'John Doe',
                'client_position' => 'CEO',
                'client_company' => 'Tech Solutions',
                'client_profile_picture' => 'https://liveramp.uk/wp-content/uploads/2022/02/affirm_solutions_single14-module5@2x.jpg'
            ],
            [
                'testimonial_text' => 'Outstanding service and attention to detail. Highly recommended!',
                'client_name' => 'Jane Smith',
                'client_position' => 'Marketing Director',
                'client_company' => 'Creative Designs',
                'client_profile_picture' => 'https://img.freepik.com/free-photo/smiling-confident-businesswoman-posing-with-arms-folded_1262-20950.jpg'
            ],
            [
                'testimonial_text' => 'They provided excellent guidance throughout our entire project.',
                'client_name' => 'Michael Brown',
                'client_position' => 'CTO',
                'client_company' => 'Green Earth Corp.',
                'client_profile_picture' => 'https://static.vecteezy.com/system/resources/previews/052/249/386/large_2x/portrait-of-a-smiling-african-businessman-for-professional-use-on-transparent-background-png.png'
            ],
            [
                'testimonial_text' => 'Their innovative solutions gave us the edge we needed in our industry.',
                'client_name' => 'Sarah Johnson',
                'client_position' => 'COO',
                'client_company' => 'Smart Technologies',
                'client_profile_picture' => 'https://as1.ftcdn.net/v2/jpg/02/76/18/18/1000_F_276181825_vGSOaQQXr2GFFDJhv95LkOR6WO9hX6WI.jpg'
            ],            
            [
                'testimonial_text' => 'They really understand the needs of their clients and deliver top-notch service.',
                'client_name' => 'James Harris',
                'client_position' => 'Operations Manager',
                'client_company' => 'Global Logistics',
                'client_profile_picture' => 'https://th.bing.com/th/id/R.687ed83fe26f49354d83550edab03207?rik=58S%2bqRfMalyblw&pid=ImgRaw&r=0'
            ],
            [
                'testimonial_text' => 'I’ve never worked with a more efficient and reliable team.',
                'client_name' => 'Isabella Garcia',
                'client_position' => 'Head of Marketing',
                'client_company' => 'MediaWorld',
                'client_profile_picture' => 'https://thumbs.dreamstime.com/b/professional-modern-woman-closeup-portrait-young-beautiful-confident-pink-shirt-gray-suit-arms-crossed-folded-smiling-indoors-55345174.jpg'
            ],
            [
                'testimonial_text' => 'Their insights have been invaluable to our growth.',
                'client_name' => 'William Martinez',
                'client_position' => 'CEO',
                'client_company' => 'BlueSky Technologies',
                'client_profile_picture' => 'https://thumbs.dreamstime.com/z/portrait-arms-crossed-business-man-company-corporate-office-workplace-pride-face-professional-employee-portrait-arms-299575750.jpg'
            ],
            [
                'testimonial_text' => 'They continuously impress us with their skill and knowledge.',
                'client_name' => 'Emma Thompson',
                'client_position' => 'Senior Developer',
                'client_company' => 'TechWorld',
                'client_profile_picture' => 'https://th.bing.com/th/id/OIP.qeffvHdSUkQYLj5YDjZRfwHaJl?rs=1&pid=ImgDetMain'
            ],
            [
                'testimonial_text' => 'Their collaboration helped us tackle some tough challenges.',
                'client_name' => 'Benjamin Lee',
                'client_position' => 'R&D Manager',
                'client_company' => 'Innovative Labs',
                'client_profile_picture' => 'https://th.bing.com/th/id/OIP.DfIbb93Jswc3BOm5oTF_wgHaMR?w=618&h=1024&rs=1&pid=ImgDetMain'
            ],
            [
                'testimonial_text' => 'The best business decision we made was partnering with them!',
                'client_name' => 'Charlotte White',
                'client_position' => 'Director of Business Development',
                'client_company' => 'FutureTech',
                'client_profile_picture' => 'https://freedesignfile.com/upload/2017/10/Beautiful-professional-women-Stock-Photo.jpg'
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
