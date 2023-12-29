<?php

namespace Database\Seeders;

use App\Models\SignatureProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SignatureProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SignatureProgram::factory()->count(3)->create([
            'program_id' => '1',
            'user_id' => '1',
            'title' => 'Leadership Development Program I-IV',
            'slug' => 'ldp',
        ]);
        SignatureProgram::factory()->count(3)->create([
            'program_id' => '2',
            'user_id' => '2',
            'title' => 'Business Simulationn',
            'slug' => 'business-simulation',
        ]);
        SignatureProgram::factory()->count(5)->create([
            'program_id' => '3',
            'user_id' => '3',
            'title' => 'Financial Performance Analysis',
            'slug' => 'financial-performance-analysis',
        ]);
        SignatureProgram::factory()->count(5)->create([
            'program_id' => '4',
            'user_id' => '4',
            'title' => 'Pengelolaan Database (PostGrest)',
            'slug' => 'pengelolaan-data',
        ]);
    }
}
