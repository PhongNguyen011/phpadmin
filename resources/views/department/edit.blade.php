@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Department</h1>

    <form action="{{ route('department.update', $department->DepartmentID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="DepartmentID" class="form-label">Department ID:</label>
            <input type="text" class="form-control" id="DepartmentID" name="DepartmentID" value="{{ old('DepartmentID', $department->getDepartmentID()) }}" required readonly>
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Department Name:</label>
            <input type="text" class="form-control" id="Name" name="Name" value="{{ old('Name', $department->getName()) }}" required>
        </div>

        <div class="mb-3">
            <label for="GroupName" class="form-label">Group Name:</label>
            <input type="text" class="form-control" id="GroupName" name="GroupName" value="{{ old('GroupName', $department->getGroupName()) }}" required>
        </div>

        <div class="mb-3">
            <label for="ModifiedDate" class="form-label">Modified Date:</label>
            <input type="datetime-local" class="form-control" id="ModifiedDate" name="ModifiedDate" value="{{ old('ModifiedDate', $department->getModifiedDate()) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Department</button>
    </form>
</div>
@endsection