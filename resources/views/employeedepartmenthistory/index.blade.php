@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-auto">
        <div class="card-header">
            <div class="hstack gap-3">
                <div>
                    <h3>List EmployeeDepartmentHistory</h3>
                </div>
                <div class="ms-auto">
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive w-auto">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">BusinessEntityID</th>
                            <th scope="col">Department ID</th>
                            <th scope="col">Shift ID</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewData['employeedepartmenthistories'] as $employeedepartmenthistory)
                            <tr>
                                <td>{{ $employeedepartmenthistory->getBusinessEntityID() }}</td>
                                <td>{{ $employeedepartmenthistory->getDepartmentID() }}</td>
                                <td>{{ $employeedepartmenthistory->getShiftID() }}</td>
                                <td>{{ $employeedepartmenthistory->getStartDate() }}</td>
                                <td>{{ $employeedepartmenthistory->getEndDate() }}</td>
                                <td>
                                    <a class="btn btn-primary" href="">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="" method="POST">
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
@endsection