@extends('employeedata.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">EmployeeData Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employee->name }}</h5>
        <p class="card-text">Address : {{ $employee->address }}</p>
        <p class="card-text">Mobile : {{ $employee->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>