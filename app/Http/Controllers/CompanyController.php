<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate();
        $data = array(
            'companies' => $companies
        );
        return view('company.index', $data);
    }

    public function create()
    {
        return view('company.add');
    }

    public function store(CompanyRequest $request)
    {
        $data = array(
            'user_id' => \Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'sector' => $request->sector,
            'website' => $request->website,
            'slug' => \Str::slug($request->name . ' ' . time())
        );
        $company = Company::create($data);

        return response()->json($company, 201);

    }

    public function show($slug)
    {
        $company = Company::whereSlug($slug)->first();
    }
}
