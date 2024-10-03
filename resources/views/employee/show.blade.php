@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-100">
        <div class="card-header">
            <h2>Employee Information</h2>
        </div>
        <div class="card-body">
            <p>BusinessEntityID: {{ $employee->getBusinessEntityID() }}</p>
            <p>NationalIDNumber: {{ $employee->getNationalIDNumber() }}</p>
            <p>LoginID: {{ $employee->getLoginID() }}</p>
            <p>OrganizationNode: {{ $employee->getOrganizationNode() }}</p>
            <p>OrganizationLevel: {{ $employee->getOrganizationLevel() }}</p>
            <p>JobTitle: {{ $employee->getJobTitle() }}</p>
            <p>BirthDate: {{ $employee->getBirthDate() }}</p>
            <p>MaritalStatus: {{ $employee->getMaritalStatus() }}</p>
            <p>Gender: {{ $employee->getGender() }}</p>
            <p>HireDate: {{ $employee->getHireDate() }}</p>
            <p>VacationHours: {{ $employee->getVacationHours() }}</p>
            <p>SickLeaveHours: {{ $employee->getSickLeaveHours() }}</p>
            <p>ModifiedDate: {{ $employee->getModifiedDate() }}</p>

        </div>
    </div>
@endsection