@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edit Shift</h1>

    <form action="{{ route('shift.update', $shift->ShiftID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="ShiftID" class="form-label">ShiftID</label>
            <input type="text" class="form-control" id="ShiftID" name="ShiftID" value="{{ old('ShiftID', $shift->ShiftID) }}" required>
        </div>

        <div class="mb-3">
            <label for="Name" class="form-label">Name:</label>
            <input type="string" class="form-control" id="Name" name="Name" value="{{ old('Name', $shift->Name) }}" required>
        </div>

        <div class="mb-3">
            <label for="StartTime" class="form-label">Start Time:</label>
            <input type="time" class="form-control" id="StartTime" name="StartTime" value="{{ old('StartTime', $shift->getStartTime()) }}" required>
        </div>

        <div class="mb-3">
            <label for="EndTime" class="form-label">End Time:</label>
            <input type="time" class="form-control" id="EndTime" name="EndTime" value="{{ old('EndTime', $shift->getEndTime()) }}" required>
        </div>

        <div class="mb-3">
            <label for="ModifiedDate" class="form-label">Modified Date:</label>
            <input type="date" class="form-control" id="ModifiedDate" name="ModifiedDate" value="{{ old('ModifiedDate', $shift->getModifiedDate()) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Shift</button>
    </form>
</div>
@endsection