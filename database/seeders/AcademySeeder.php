<?php

namespace Database\Seeders;

use App\Models\Academy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Academy::create([
            'title' => 'Leadership Academy',
            'slug' => 'leadership-academy',
        ]);
        Academy::create([
            'title' => 'Corporate Planning Academy',
            'slug' => 'coporate-planning-academy',
        ]);
        Academy::create([
            'title' => 'Risk and Finance Academy',
            'slug' => 'risk-finance-academy',
        ]);
        Academy::create([
            'title' => 'Digital Academy',
            'slug' => 'digital-academy',
        ]);
    }
}
