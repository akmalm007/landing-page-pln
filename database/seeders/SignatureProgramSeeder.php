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
        SignatureProgram::factory()->create([
            'program_id' => '1',
            'user_id' => '1',
            'title' => 'Leadership Development Program',
            'slug' => 'ldp',
        ]);
    }
}
