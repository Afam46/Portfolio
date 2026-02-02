<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Очищаем таблицу перед заполнением
        DB::table('projects')->truncate();

        $projects = [
            [
                'img' => 'img/nitro_rush.jpg',
                'title' => 'Nitro Rush',
                'description' => 'Nitro Rush - Веб игра для виртуальных гонок с системой покупки машин и участия в заездах.',
                'link' => 'https://github.com/Afam46/Nitro-Rush',
            ],
            [
                'img' => 'img/garden_goldmine.png',
                'title' => 'Garden Goldmine',
                'description' => 'Garden Goldmine - Симулятор выращивания растений с системой покупки, посадки и ухода за растениями.',
                'link' => 'https://github.com/Afam46/Garden-Goldmine',
            ],
            [
                'img' => 'img/portfolio_site.jpg',
                'title' => 'Portfolio',
                'description' => 'Portfolio - Мой сайт-портфолио, где показаны мои умения и собраны все проекты',
                'link' => 'https://github.com/Afam46/Portfolio',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}