<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::query()->find(1);
        $company->employees()->createMany([
            [
                'name' => 'Employee Name 1',
                'surname' => 'Employee Surname 1',
                'embg' => 'Employee EMBG 1',
                'address' => 'Employee Address 1'
            ],
            [
                'name' => 'Employee Name 2',
                'surname' => 'Employee Surname 2',
                'embg' => 'Employee EMBG 2',
                'address' => 'Employee Address 2'
            ],
            [
                'name' => 'Employee Name 3',
                'surname' => 'Employee Surname 3',
                'embg' => 'Employee EMBG 3',
                'address' => 'Employee Address 3'
            ]
        ]);
    }
}
