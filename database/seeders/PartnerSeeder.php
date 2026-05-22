<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

        $logos = [
            'https://placehold.co/200x200?text=Partner+1',
            'https://placehold.co/200x200?text=Partner+2',
            'https://placehold.co/200x200?text=Partner+3',
            'https://placehold.co/200x200?text=Partner+4',
            'https://placehold.co/200x200?text=Partner+5',
        ];

        $names = [
            'Amikom Official',
            'Digital Market Co.',
            'Tech Learning Partner',
            'Creative Studio Indonesia',
            'Cloud Service Partner',
        ];

        for ($i = 0; $i < 5; $i++) {
            \App\Models\Partner::create([
                'name'     => $names[$i] ?? $faker->company,
                'logo_url' => $logos[$i] ?? 'https://placehold.co/200x200',
            ]);
        }
    }
}
