<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Str;
class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [

            // Engineering
            ['name' => 'B.Tech', 'level' => 'UG'],
            ['name' => 'M.Tech', 'level' => 'PG'],
            ['name' => 'Diploma Engineering', 'level' => 'Diploma'],

            // Management
            ['name' => 'MBA', 'level' => 'PG'],
            ['name' => 'BBA', 'level' => 'UG'],

            // Computer
            ['name' => 'BCA', 'level' => 'UG'],
            ['name' => 'MCA', 'level' => 'PG'],

            // Science
            ['name' => 'B.Sc', 'level' => 'UG'],
            ['name' => 'M.Sc', 'level' => 'PG'],

            // Commerce
            ['name' => 'B.Com', 'level' => 'UG'],
            ['name' => 'M.Com', 'level' => 'PG'],

            // Medical / Nursing
            ['name' => 'B.Sc Nursing', 'level' => 'UG'],
            ['name' => 'GNM Nursing', 'level' => 'Diploma'],
            ['name' => 'ANM Nursing', 'level' => 'Diploma'],

            // Pharmacy
            ['name' => 'B.Pharm', 'level' => 'UG'],
            ['name' => 'D.Pharm', 'level' => 'Diploma'],

            // Law
            ['name' => 'LLB', 'level' => 'UG'],
            ['name' => 'BA LLB', 'level' => 'UG'],

            // Education
            ['name' => 'B.Ed', 'level' => 'UG'],
            ['name' => 'D.El.Ed', 'level' => 'Diploma'],

            // Arts
            ['name' => 'BA', 'level' => 'UG'],
            ['name' => 'MA', 'level' => 'PG'],
        ];

        foreach ($courses as $course) {
            Course::create([
                'name' => $course['name'],
                'slug' => Str::slug($course['name']),
                'level' => $course['level']
            ]);
        }
    }

}
