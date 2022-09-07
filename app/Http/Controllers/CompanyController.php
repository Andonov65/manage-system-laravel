<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyController extends Controller
{
    public function index(): JsonResource
    {
        $companies= Company::all();

        return JsonResource::collection($companies);
    }

    public function show(Company $company): AnonymousResourceCollection
    {
        $employees = Employee::query()->where('company_id', '=', $company->id)->paginate();

        return JsonResource::collection($employees);
    }
}
