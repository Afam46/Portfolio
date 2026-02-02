<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Очищаем таблицу перед заполнением
        DB::table('skills')->truncate();

        $skills = [
            [
                'title' => 'PHP',
                'link' => '#',
                'img' => 'img/php.png',
                'scale' => false,
            ],
            [
                'title' => 'JS',
                'link' => '#',
                'img' => 'img/js.png',
                'scale' => false,
            ],
            [
                'title' => 'HTML',
                'link' => '#',
                'img' => 'img/html.png',
                'scale' => false,
            ],
            [
                'title' => 'CSS',
                'link' => '#',
                'img' => 'img/css.png',
                'scale' => false,
            ],
            [
                'title' => 'Laravel',
                'link' => '#',
                'img' => 'img/laravel.png',
                'scale' => true,
            ],
            [
                'title' => 'VUE',
                'link' => '#',
                'img' => 'img/vue.png',
                'scale' => true,
            ],
            [
                'title' => 'GIT',
                'link' => '#',
                'img' => 'img/git.png',
                'scale' => false,
            ],
            [
                'title' => 'MySQL',
                'link' => '#',
                'img' => 'img/mysql.png',
                'scale' => false,
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}