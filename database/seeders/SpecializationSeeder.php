<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Course;
use App\Models\Specialization;
use Illuminate\Support\Str;
class SpecializationSeeder extends Seeder
{

    public function run()
    {
        // B.Tech Specializations
        $btech = Course::where('name', 'B.Tech')->first();

        $btechSpecs = [
            'Computer Science Engineering (CSE)',
            'Information Technology (IT)',
            'Mechanical Engineering',
            'Civil Engineering',
            'Electronics & Communication Engineering (ECE)',
            'Electrical Engineering (EE)',
            'Artificial Intelligence',
            'Data Science',
            'Cyber Security'
        ];

        foreach ($btechSpecs as $spec) {
            Specialization::create([
                'course_id' => $btech->id,
                'name' => $spec,
                'slug' => Str::slug($spec),
            ]);
        }


        // MBA Specializations
        $mba = Course::where('name', 'MBA')->first();

        $mbaSpecs = [
            'Marketing',
            'Finance',
            'Human Resource (HR)',
            'International Business',
            'Operations Management',
            'Business Analytics',
            'Digital Marketing'
        ];

        foreach ($mbaSpecs as $spec) {
            Specialization::create([
                'course_id' => $mba->id,
                'name' => $spec,
                'slug' => Str::slug($spec),
            ]);
        }


        // BCA Specializations
        $bca = Course::where('name', 'BCA')->first();

        $bcaSpecs = [
            'Software Development',
            'Web Development',
            'Data Science',
            'Cyber Security',
            'Artificial Intelligence'
        ];

        foreach ($bcaSpecs as $spec) {
            Specialization::create([
                'course_id' => $bca->id,
                'name' => $spec,
                'slug' => Str::slug($spec),
            ]);
        }
    }
}
