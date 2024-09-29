<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDepartmentHistory extends Model
{
    use HasFactory;
    protected $table = "employeedepartmenthistories";
    protected $fillable = ['BusinessEntityID', 'DepartmentID', 'ShiftID', 'StartDate', 'EndDate', 'ModifiedDate'];


    public function department()
    {
        return $this->belongsTo(Department::class, "DepartmentID");
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, "BusinessEntityID");
    }
    public function shift()
    {
        return $this->belongsTo(Shift::class, "ShiftID");
    }
    public function getBusinessEntityID(): mixed
    {
        return $this
            ->attributes['BusinessEntityID'];
    }
    public function setBusinessEntityID($BusinessEntityID): void
    {
        $this
            ->attributes['BusinessEntityID'] = $BusinessEntityID;
    }

    public function getDepartmentID(): mixed
    {
        return $this
            ->attributes['DepartmentID'];
    }
    public function setDepartmentID($DepartmentID): void
    {
        $this
            ->attributes['DepartmentID'] = $DepartmentID;
    }
    public function getShiftID(): mixed
    {
        return $this
            ->attributes['ShiftID'];
    }
    public function setShiftID($shiftID): void
    {
        $this
            ->attributes['DepartmentID'] = $shiftID;
    }
    public function getStartDate(): mixed
    {
        return $this
            ->attributes['StartDate'];
    }
    public function setStartDate($StartDate): void
    {
        $this
            ->attributes['StartDate'] = $StartDate;
    }
    public function getEndDate(): mixed
    {
        return $this
            ->attributes['EndDate'];
    }
    public function setEndDate($EndDate): void
    {
        $this
            ->attributes['StartDate'] = $EndDate;
    }
    public function getModifiedDate(): mixed
    {
        return $this
            ->attributes['ModifiedDate'];
    }
    public function setModifiedDate($ModifiedDate): void
    {
        $this
            ->attributes['ModifiedDate'] = $ModifiedDate;
    }
}
