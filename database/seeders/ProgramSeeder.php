<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::factory()->create([
            'academy_id' => '1',
            'name' => 'Leadership Program',
            'slug' => 'leadership-academy',
            'jenis' => 'non-teknik',
        ]);
        Program::factory()->create([
            'academy_id' => '2',
            'name' => 'Corporate Planning Program',
            'slug' => 'coporate-planning-academy',
            'jenis' => 'teknik',
        ]);
        Program::factory()->create([
            'academy_id' => '3',
            'name' => 'Risk and Finance Program',
            'slug' => 'risk-finance-academy',
            'jenis' => 'teknik',
        ]);
        Program::factory()->create([
            'academy_id' => '4',
            'name' => 'Digital Program',
            'slug' => 'digital-academy',
            'jenis' => 'non-teknik',
        ]);
    }
}
