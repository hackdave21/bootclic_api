<?php

namespace Database\Seeders;

use App\Models\Response;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $responses = [
            [
                'question' => "Qu'est-ce que le projet D-CLIC ?",
                'answer' => "D-CLIC est un projet de formation numérique qui vise à former les jeunes aux métiers du numérique."
            ],
            [
                'question' => "Quelles sont les formations disponibles ?",
                'answer' => "D-CLIC propose deux formations principales : Développement Web et Web Mobile, Communication et Marketing Digital."
            ],
        ];

        foreach ($responses as $response) {
            Response::create($response);
        }
    }
}
