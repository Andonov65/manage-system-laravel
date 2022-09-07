<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee1 = Employee::query()->find(1);
        $employee1->salaries()->createMany([
            [
                'sum' => 400,
                'date' => date('2022-10-01 12:00:38'),
            ],
            [
                'sum' => 700,
                'date' => date('2022-10-01 12:00:38'),
            ],
            [
                'sum' => 500,
                'date' => date('2022-10-01 12:00:38'),
            ]
        ]);

        $employee2 = Employee::query()->find(2);
        $employee2->salaries()->createMany([
            [
                'sum' => 300,
                'date' => date('2022-10-01 12:00:38'),
            ],
            [
                'sum' => 900,
                'date' => date('2022-10-01 12:00:38'),
            ],
            [
                'sum' => 600,
                'date' => date('2022-10-01 12:00:38'),
            ]
        ]);

        $employee3 = Employee::query()->find(3);
        $employee3->salaries()->createMany([
            [
                'sum' => 900,
                'date' => date('2022-10-01 12:00:38'),
            ],
            [
                'sum' => 100,
                'date' => date('2022-10-01 12:00:38'),
            ],
            [
                'sum' => 400,
                'date' => date('2022-10-01 12:00:38'),
            ]
        ]);

    }
}
