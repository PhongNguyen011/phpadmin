@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-auto">
        <div class="card-header">
            <div class="hstack gap-3">
                <div>
                    <h3>List Departments</h3>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-lg btn-outline-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#formModalDepartment">Create new department</button>
                </div>
            </div>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive w-auto">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID </th>
                            <th scope="col">Name</th>
                            <th scope="col">GroupName</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewData['departments'] as $department)
                            <tr>
                                <td>{{ $department->getDepartmentID() }}</td>
                                <td>{{ $department->getName() }}</td>
                                <td>{{ $department->getGroupName() }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('department.edit', $department->getDepartmentID()) }}">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('department.show', ['DepartmentID' => $department->getDepartmentID()]) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('department.destroy', ['id' => $department->getDepartmentID()]) }}" method="POST">
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

    <!-- Modal Create New Department -->
    <div class="modal fade" id="formModalDepartment" tabindex="-1" aria-labelledby="formModalDepartmentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('department.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalDepartmentLabel">Create new department</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="departmentName" class="form-label">Department Name</label>
                            <input type="text" class="form-control" id="Name" name="Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="groupName" class="form-label">Group Name</label>
                            <input type="text" class="form-control" id="GroupName" name="GroupName" required>
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
