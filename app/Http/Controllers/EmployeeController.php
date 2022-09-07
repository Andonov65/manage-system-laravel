<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function getEmployeeSalaries(Employee $employee): JsonResource
    {
        $salaries = Salary::query()->where('employee_id','=', $employee->id)->get('sum');

        return JsonResource::collection($salaries);
    }

    public function getEmployeeAverageSalary(Employee $employee): JsonResource
    {
        $salaries = Salary::query()->where('employee_id','=', $employee->id)->average('sum');

        return JsonResource::make(collect(number_format((float)$salaries, 2)));
    }
}
