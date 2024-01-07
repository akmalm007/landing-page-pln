<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::factory()->create([
            'name' => 'Ruang Kelas Simbis',
            'type' => 'utama',
        ]);
        Facility::factory()->create([
            'name' => 'Ruang Kelas SmartRoom',
            'type' => 'utama',
        ]);
        Facility::factory()->create([
            'name' => 'Ruang Kelas Hayam Wuruk',
            'type' => 'utama',
        ]);
        Facility::factory()->create([
            'name' => 'Ruang Kelas Sudirman',
            'type' => 'utama',
        ]);
        Facility::factory()->create([
            'name' => 'Ruang Kelas Teuku Umar',
            'type' => 'utama',
        ]);
        // Fasilitas Pendukung
        Facility::factory()->create([
            'name' => 'Library',
            'type' => 'pendukung',
        ]);

        Facility::factory()->create([
            'name' => 'GYM',
            'type' => 'pendukung',
        ]);
        Facility::factory()->create([
            'name' => 'Mosque',
            'type' => 'pendukung',
        ]);
        Facility::factory()->create([
            'name' => 'Canteen',
            'type' => 'pendukung',
        ]);
    }
}
