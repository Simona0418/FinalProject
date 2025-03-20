<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
            'company_name' => 'Tech Innovations', 
            'industry_id' => 1, 
            'logo' => 'https://c8.alamy.com/comp/2RTPK39/technology-innovation-icon-robot-automation-tech-editable-stroke-simple-vector-icon-2RTPK39.jpg', 
            'collaboration_description' => 'A leading tech company providing innovative solutions for software development.'
            ],
            [
            'company_name' => 'Green Earth Solutions', 
            'industry_id' => 2, 'logo' => 'https://th.bing.com/th/id/OIP.3BC6Ny9Eqv-gAby7DIB7ZAHaHa?rs=1&pid=ImgDetMain', 
            'collaboration_description' => 'Partner in eco-friendly technology and sustainability projects.'
            ],
            [
            'company_name' => 'Health Plus',
            'industry_id' => 3,
            'logo' => 'https://th.bing.com/th/id/R.ad90e71f433329589770073f676efd94?rik=0OfRVK6Gf8NZ%2fA&pid=ImgRaw&r=0',
            'collaboration_description' => 'Collaboration in healthcare technologies and medical software solutions.'
            ],
            [
            'company_name' => 'Finance Forward',
            'industry_id' => 4, 
            'logo' => 'https://cdn3.iconfinder.com/data/icons/money-banking-and-payment-filled-outline/256/finance-1024.png', 
            'collaboration_description' => 'Financial consulting and services partnership.'
            ],
            [
            'company_name' => 'Creative Minds Studio', 
            'industry_id' => 5, 'logo' => 'https://static.vecteezy.com/system/resources/previews/015/605/680/non_2x/creative-minds-icon-outline-style-vector.jpg', 
            'collaboration_description' => 'Creative design and digital marketing collaboration.'
            ],
            [
            'company_name' => 'EduWorld', 
            'industry_id' => 6, 
            'logo' => 'https://th.bing.com/th/id/OIP.4oIFdK_XQhIboERUw8oe0QHaHa?rs=1&pid=ImgDetMain', 
            'collaboration_description' => 'Educational tools and e-learning platform partner.'
            ],
            [
            'company_name' => 'LogiTech Solutions', 
            'industry_id' => 7, 
            'logo' => 'https://th.bing.com/th/id/R.d7c0a047d10c1e916de2730a614c0f47?rik=VqHK6f8RuePbkA&pid=ImgRaw&r=0', 
            'collaboration_description' => 'Logistics and supply chain management software provider.'
            ],
            [
            'company_name' => 'Smart Homes Inc.',
            'industry_id' => 8, 
            'logo' => 'https://static.vecteezy.com/system/resources/previews/017/784/943/non_2x/smart-home-icon-on-transparent-background-free-png.png', 
            'collaboration_description' => 'Partner in smart home technologies and IoT integration.'
            ],
            [
            'company_name' => 'AutoTech Pro', 
            'industry_id' => 9, 'logo' => 'https://th.bing.com/th/id/R.7ecdc1e05857e0bd27fa923b052d9404?rik=KMII2mtxmwBGGA&pid=ImgRaw&r=0',
            'collaboration_description' => 'Automotive industry partner focusing on AI and automation.'
            ],
            [
            'company_name' => 'Global Ventures', 
            'industry_id' => 10, 
            'logo' => 'https://c8.alamy.com/comp/2KDXJJ1/joint-venture-icon-monochrome-simple-global-business-icon-for-templates-web-design-and-infographics-2KDXJJ1.jpg', 
            'collaboration_description' => 'Collaboration in business development and international expansion.'
            ]
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
