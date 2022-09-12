<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
//    public function getAverageSalaryForCompany(Company $company): JsonResource
//    {
//        $employees = Salary::query()
//            ->join('employees','employees.id','=','salaries.employee_id')
//            ->where('company_id', '=', $company->id)
//            ->average('sum');
//
//        return JsonResource::make(collect(number_format((float)$employees, 2)));
//    }

    public function getAverageSalaryForCompany(Company $company): JsonResource
    {
        $averageCompanySalary= $company->salaries()->getResults()->average('sum');

        return JsonResource::make(collect(number_format($averageCompanySalary, 2)));
    }
}
