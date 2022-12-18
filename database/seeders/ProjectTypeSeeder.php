<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectType::query()->create([
            'title' => 'مشروع عام',
        ]);
        ProjectType::query()->create([
            'title' => 'مقهى/مطعم',
        ]);
        ProjectType::query()->create([
            'title' => 'خدمات لوجستية',
        ]);
    }
}
