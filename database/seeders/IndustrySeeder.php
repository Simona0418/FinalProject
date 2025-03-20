<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industry;


class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $industries = [
            [
                'name' => 'Technology',
                'description' => 'Industry focused on the development and innovation of software, hardware, and IT services.',
                'icon' => 'https://th.bing.com/th/id/OIP.iqRMQiJPwne1V_YHe4coVAHaHa?rs=1&pid=ImgDetMain',
            ],
            [
                'name' => 'Healthcare',
                'description' => 'Industry dedicated to providing medical services, manufacturing medical equipment, and developing pharmaceuticals.',
                'icon' => 'https://cdn.vectorstock.com/i/preview-1x/77/56/hand-holding-heart-beat-health-symbol-heart-vector-44517756.jpg',
            ],
            [
                'name' => 'Finance',
                'description' => 'Industry focused on managing money, including banking, investment, and insurance sectors.',
                'icon' => 'https://cdn-icons-png.flaticon.com/512/4541/4541461.png',
            ],
            [
                'name' => 'Education',
                'description' => 'Industry centered on delivering learning services through schools, universities, and other educational platforms.',
                'icon' => 'https://th.bing.com/th/id/R.4e55b71d9cb6e260915e99c41efb550b?rik=K4cx0pHQZ7MKZw&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2feducation-clipart-transparent%2feducation-clipart-transparent-7.png&ehk=S9pckM7%2beyJkkKgABmBPvmxU1NucTGxMy%2bn4Qq5xOEw%3d&risl=&pid=ImgRaw&r=0',
            ],
            [
                'name' => 'Retail',
                'description' => 'Industry involving the sale of goods and services directly to consumers.',
                'icon' => 'https://cdn3.iconfinder.com/data/icons/shopping-185/128/shop_store_retail-1024.png',
            ],
            [
                'name' => 'Manufacturing',
                'description' => 'Industry engaged in the production of goods, from raw materials to finished products.',
                'icon' => 'https://static.vecteezy.com/system/resources/previews/013/365/315/non_2x/manufacturing-icon-design-free-vector.jpg',
            ],
            [
                'name' => 'Real Estate',
                'description' => 'Industry focused on the development, buying, selling, and renting of properties.',
                'icon' => 'https://static.vecteezy.com/system/resources/previews/000/571/278/original/vector-real-estate-icon.jpg',
            ],
            [
                'name' => 'Hospitality',
                'description' => 'Industry related to the provision of services like accommodation, food, and tourism.',
                'icon' => 'https://static.vecteezy.com/system/resources/previews/005/963/668/original/hospitality-industry-glyph-icon-touristwith-suitcase-concierge-hotel-management-services-reservation-desk-tourism-business-silhouette-symbol-negative-space-isolated-illustration-vector.jpg',
            ],
            [
                'name' => 'Energy',
                'description' => 'Industry involved in the production and distribution of energy sources like oil, gas, and renewables.',
                'icon' => 'https://static.vecteezy.com/system/resources/previews/021/786/444/original/lightning-power-icon-in-flat-style-energy-symbol-illustration-on-isolated-background-start-sign-business-concept-vector.jpg',
            ],
            [
                'name' => 'Transportation',
                'description' => 'Industry responsible for moving people and goods by various modes such as air, rail, and road.',
                'icon' => 'https://th.bing.com/th/id/R.b430576680de9ef49b435576a243f974?rik=cayyQvDIZrjaXg&pid=ImgRaw&r=0',
            ],
        ];

        foreach ($industries as $industry) {
            Industry::create($industry);
        }
    }
}
