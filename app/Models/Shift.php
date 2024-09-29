<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    protected $table = "shifts";
    public function employeeHistories()
    {
        return $this->hasMany(EmployeeDepartmentHistory::class);
    }
    public function getShiftID(): mixed
    {
        return $this
            ->attributes['ShiftID'];
    }
    public function setShiftID($shiftID): void
    {
        $this
            ->attributes['ShiftID'] = $shiftID;
    }
    public function getName(): mixed
    {
        return $this
            ->attributes['Name'];
    }
    public function setName($name): void
    {
        $this
            ->attributes['Name'] = $name;
    }
    public function getStartTime(): mixed
    {
        return $this
            ->attributes['StartTime'];
    }
    public function setStartTime($startTime): void
    {
        $this
            ->attributes['StartTime'] = $startTime;
    }
    public function getEndTime(): mixed
    {
        return $this
            ->attributes['EndTime'];
    }
    public function setEndTime($endTime): void
    {
        $this
            ->attributes['EndTime'] = $endTime;
    }
    public function getModifiedDate(): mixed
    {
        return $this
            ->attributes['ModifiedDate'];
    }
    public function setModifiedDate($modifiedDate): void
    {
        $this
            ->attributes['ModifiedDate'] = $modifiedDate;
    }
}
