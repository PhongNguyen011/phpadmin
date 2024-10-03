<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = "departments";

    protected $fillable = [
        'DepartmentID', 
        'Name', 
        'GroupName', 
        'ModifiedDate'
    ];
    protected $primaryKey = 'DepartmentID'; 
    public $timestamp = false;
    public $incrementing = false;
    protected $keyType = 'string'; 

    public function employeeHistories()
    {
        return $this->hasMany(EmployeeDepartmentHistory::class);
    }

    public function getDepartmentID()
    {
        return $this->attributes['DepartmentID'];
    }

    public function setDepartmentID($departmentID)
    {
        $this->attributes['DepartmentID'] = $departmentID;
    }

    public function getName()
    {
        return $this->attributes['Name'];
    }

    public function setName($name)
    {
        $this->attributes['Name'] = $name;
    }

    public function getGroupName()
    {
        return $this->attributes['GroupName'];
    }

    public function setGroupName($groupName)
    {
        $this->attributes['GroupName'] = $groupName;
    }

    public function getModifiedDate()
    {
        return $this->attributes['ModifiedDate'];
    }

    public function setModifiedDate($modifiedDate)
    {
        $this->attributes['ModifiedDate'] = $modifiedDate;
    }
}