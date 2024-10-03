@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-100">
        <div class="card-header">
            <h2>Department Information</h2>
        </div>
        <div class="card-body">
            <h3>Department History</h3>
            <p>DepartmentID: {{ $department->getDepartmentID() }}</p>
            <p>Name: {{ $department->getName() }}</p>
            <p>GroupName: {{ $department->getGroupName() }}</p>
            <p>ModifiedDate: {{ $department->getModifiedDate() }}</p>
        </div>


    </div>
@endsection