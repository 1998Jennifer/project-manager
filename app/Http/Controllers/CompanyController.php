<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::get();
        return view('company.index', compact("companies"));
        
    }

    public function create()
    {
        
       return view('company.form');

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $companies = Company::create([
            'user_id' => auth()->user()->id
        ] + $request->all());
        return redirect('companies')->with('status', 'Creado con éxito');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function edit (Company $company)
    {
        // dd($Company->all());
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        // dd($request->all());
        $company->update($request->all());
        return redirect('companies')->with('status', 'Actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return back()->with('status', 'Eliminado con éxito');        
    }
}
