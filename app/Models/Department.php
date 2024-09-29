<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";
    public function employeeHistories(){
        return $this-> hasMany(EmployeeDepartmentHistory::class);
    }

    public function getDepartmentID(): mixed
    {
        return $this
            ->attributes['DepartmentID'];
    }
    public function setDepartmentID($departmentID): void
    {
        $this
            ->attributes['DepartmentID'] = $departmentID;
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
    public function getGroupName(): mixed
    {
        return $this
            ->attributes['GroupName'];
    }
    public function setGroupName($groupName): void
    {
        $this
            ->attributes['GroupName'] = $groupName;
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
