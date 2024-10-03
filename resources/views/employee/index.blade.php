@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-auto">
        <div class="card-header">
            <div class="hstack gap-3">
                <div>
                    <h3>List Employees</h3>
                </div>
                <div class="ms-auto">
                    <form action="{{ route('employee.index') }}" method="GET" class="d-flex">
                        @csrf
                        <input class="form-control me-2" type="search" name="search" placeholder="Search Employee" aria-label="Search" value="{{ old('search') }}">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-lg btn-outline-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#formModalEmployee">Create new employee</button>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive w-auto overflow-auto" style="height: 500px">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">National ID</th>
                            <th scope="col">Login ID</th>
                            <th scope="col">Job</th>
                            <th scope="col">BirthDate</th>
                            <th scope="col">Gender</th>
                            <th scope="col">HireDate</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewData['employees'] as $employee)
                            <tr>
                                <td>{{ $employee->getBusinessEntityID() }}</td>
                                <td>{{ $employee->getNationalIDNumber() }}</td>
                                <td>{{ $employee->getLoginID() }}</td>
                                <td>{{ $employee->getJobTitle() }}</td>
                                <td>{{ $employee->getBirthDate() }}</td>
                                <td>{{ $employee->getGender() }}</td>
                                <td>{{ $employee->getHireDate() }}</td>
                                <td>
                                    <a class="btn btn-primary" href="">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('employee.show', ['BusinessEntityID' => $employee->getBusinessEntityID()]) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('employee.destroy', ['id' => $employee->getBusinessEntityID()]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            <i class="bi-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formModalEmployee" tabindex="-1" aria-labelledby="formModalEmployeeLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalDepartmentLabel">Create new Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="NationalIDNumber" class="form-label">National ID</label>
                            <input type="text" class="form-control" id="NationalIDNumber" name="NationalIDNumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="LoginID" class="form-label">Login ID</label>
                            <input type="text" class="form-control" id="LoginID" name="LoginID" required>
                        </div>
                        <div class="mb-3">
                            <label for="JobTitle" class="form-label">Job</label>
                            <input type="text" class="form-control" id="JobTitle" name="JobTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="BirthDate" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" id="BirthDate" name="BirthDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="Gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="Gender" name="Gender" required>
                        </div>
                        <div class="mb-3">
                            <label for="HireDate" class="form-label">Hire Date</label>
                            <input type="date" class="form-control" id="HireDate" name="HireDate" required>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection