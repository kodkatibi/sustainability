<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return CompanyResource::collection(Company::paginate());

    }

    public function info($id)
    {
        return CompanyResource::collection(Company::whereId($id)->get());
    }
}
