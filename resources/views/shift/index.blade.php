@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card w-auto">
        <div class="card-header">
            <div class="hstack gap-3">
                <div>
                    <h3>List Shifts</h3>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-lg btn-outline-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#formModalShift">Create new shift</button>
                </div>
            </div>
        </div>
        <div class="card-body">
        </div>

        <div class="card-body">
            <div class="table-responsive w-auto">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">StartTime</th>
                            <th scope="col">EndTime</th>
                            <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viewData['shifts'] as $shift)
                            <tr>
                                <td>{{ $shift->getShiftID() }}</td>
                                <td>{{ $shift->getName() }}</td>
                                <td>{{ $shift->getStartTime() }}</td>
                                <td>{{ $shift->getEndTime() }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('shift.edit', $shift->getShiftID()) }}">
                                        <i class="bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('shift.destroy', ['id' => $shift->getShiftID()]) }}" method="POST">
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
    <div class="modal fade" id="formModalShift" tabindex="-1" aria-labelledby="formModalShiftLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('shift.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalShiftLabel">Create new shift</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="Name" name="Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="StartTime" class="form-label">Start Time</label>
                            <input type="time" class="form-control" id="StartTime" name="StartTime" required>
                        </div>
                        <div class="mb-3">
                            <label for="EndTime" class="form-label">End Time</label>
                            <input type="time" class="form-control" id="EndTime" name="EndTime" required>
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