<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeData;
use Illuminate\View\View;

class EmployeeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $employeedata = EmployeeData::all();
        return view ('employeedata.index')->with('employeedata', $employeedata);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('employeedata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : View
    {
        $input = $request->all();
        EmployeeData::create($input);
         $employeedata = EmployeeData::all();
        return view ('employeedata.index')->with('employeedata', $employeedata);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $employeedata = EmployeeData::find($id);
        return view('employeedata.show')->with('employeedata', $employeedata);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $employeedata = EmployeeData::find($id);
        return view('employeedata.edit')->with('employeedata', $employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : View
    {
        $employeedata = EmployeeData::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('employeedata')->with('flash_message', 'employeedata Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : View
    {
        EmployeeData::destroy($id);
        return redirect('employeedata')->with('flash_message', 'employeedata deleted!');
    }
    public function view(Request $request)
    {
        $search = $request('search') ?? "";
        if($search!=""){
            $employeedata = EmployeeData::where('name','=',$search)->get();
        }else{
            $employeedata = EmployeeData::all();
        }
       $data = compact('employeedata','search');
        return view('employeedata view')->with($data);
    }
    public function employee(EmployeeData $id)
    {
       return $id;
    }
   /* public function search(Request $request, string $name ) :View
    {
        
        
    }*/
}
