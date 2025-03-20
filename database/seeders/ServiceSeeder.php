<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
            'name' => 'Web Development', 
            'description' => 'Full-stack web development services using modern technologies.', 
            'service_category_id' => 1, 
            'industry_id' => 1
            ],
            [
            'name' => 'Mobile App Development', 
            'description' => 'Custom mobile application development for Android and iOS.', 
            'service_category_id' => 1, 
            'industry_id' => 2
            ],
            [
            'name' => 'Graphic Design',
            'description' => 'Creative and professional graphic design services.',
            'service_category_id' => 3,
            'industry_id' => 3
            ],
            [
            'name' => 'SEO Optimization', 
            'description' => 'Search engine optimization services to boost website ranking.', 
            'service_category_id' => 4, 
            'industry_id' => 1
            ],
            [
            'name' => 'Social Media Marketing', 
            'description' => 'Comprehensive social media marketing strategies.', 
            'service_category_id' => 4, 
            'industry_id' => 2
            ],
            [
            'name' => 'Cloud Infrastructure Setup', 
            'description' => 'Setting up and managing cloud-based infrastructure.', 
            'service_category_id' => 8, 
            'industry_id' => 4
            ],
            [
            'name' => 'IT Consulting', 
            'description' => 'Expert IT consulting services to enhance business operations.', 
            'service_category_id' => 1, 
            'industry_id' => 1
            ],
            [
            'name' => 'Data Analytics', 
            'description' => 'Advanced data analytics solutions for business insights.', 
            'service_category_id' => 10, 
            'industry_id' => 5
            ],
            [
            'name' => 'Cybersecurity', 
            'description' => 'Comprehensive cybersecurity services for businesses.', 
            'service_category_id' => 9, 
            'industry_id' => 6
            ],
            [
            'name' => 'Project Management', 
            'description' => 'Professional project management services for various industries.', 
            'service_category_id' => 7, 
            'industry_id' => 4
            ],
            [
            'name' => 'UX/UI Design', 
            'description' => 'User experience and interface design services.', 
            'service_category_id' => 3, 
            'industry_id' => 3
            ],
            [
            'name' => 'Content Creation', 
            'description' => 'Creating compelling and engaging content for your brand.', 
            'service_category_id' => 4, 
            'industry_id' => 7
            ],
            [
            'name' => 'Customer Support Outsourcing', 
            'description' => 'Reliable and efficient customer support outsourcing.', 
            'service_category_id' => 5, 
            'industry_id' => 8
            ],
            [
            'name' => 'Software Development', 
            'description' => 'Custom software development tailored to business needs.', 
            'service_category_id' => 1, 
            'industry_id' => 9
            ],
            [
            'name' => 'Cloud Migration', 
            'description' => 'Seamless migration to cloud infrastructure.', 
            'service_category_id' => 8, 
            'industry_id' => 4
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
