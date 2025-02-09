<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            ['name' => 'Développement Web et Mobile'],
            ['name' => 'Communication et Marketing digital']
        ];

        foreach ($sections as $section) {
            Section::create($section);
        }
    }
}
