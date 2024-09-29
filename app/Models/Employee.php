<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
     protected $fillable = [
        'BusinessEntityID',
        'NationalIDNumber',
        'LoginID',
        'OrganizationNode',
        'OrganizationLevel',
        'JobTitle',
        'BirthDate',
        'MaritalStatus',
        'Gender',
        'HireDate',
        'VacationHours',
        'SickLeaveHours',
        'ModifiedDate'
    ];
     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public function employeeHistories()
    {
        return $this->hasMany(EmployeeDepartmentHistory::class);
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
    public function getNationalIDNumber(): mixed
    {
        return $this
            ->attributes['NationalIDNumber'];
    }
    public function setNationalIDNumber($NationalIDNumber): void
    {
        $this
            ->attributes['NationalIDNumber'] = $NationalIDNumber;
    }
    public function getLoginID(): mixed
    {
        return $this
            ->attributes['LoginID'];
    }
    public function setLoginID($LoginID): void
    {
        $this
            ->attributes['LoginID'] = $LoginID;
    }
    public function getOrganizationNode(): mixed
    {
        return $this
            ->attributes['OrganizationNode'];
    }
    public function setOrganizationNode($OrganizationNode): void
    {
        $this
            ->attributes['OrganizationNode'] = $OrganizationNode;
    }
    public function getOrganizationLevel(): mixed
    {
        return $this
            ->attributes['OrganizationLevel'];
    }
    public function setOrganizationLevel($OrganizationLevel): void
    {
        $this
            ->attributes['OrganizationLevel'] = $OrganizationLevel;
    }
    public function getJobTitle(): mixed
    {
        return $this
            ->attributes['JobTitle'];
    }
    public function setJobTitle($JobTitle): void
    {
        $this
            ->attributes['JobTitle'] = $JobTitle;
    }
    public function getBirthDate(): mixed
    {
        return $this
            ->attributes['BirthDate'];
    }
    public function setBirthDate($BirthDate): void
    {
        $this
            ->attributes['BirthDate'] = $BirthDate;
    }
    public function getMaritalStatus(): mixed
    {
        return $this
            ->attributes['MaritalStatus'];
    }
    public function setMaritalStatus($MaritalStatus): void
    {
        $this
            ->attributes['MaritalStatus'] = $MaritalStatus;
    }
    public function getGender(): mixed
    {
        return $this
->attributes['Gender'];
    }
    public function setGender($Gender): void
    {
        $this
            ->attributes['Gender'] = $Gender;
    }
    public function getHireDate(): mixed
    {
        return $this
            ->attributes['HireDate'];
    }
    public function setHireDate($HireDate): void
    {
        $this
            ->attributes['HireDate'] = $HireDate;
    }
    public function getVacationHours(): mixed
    {
        return $this
            ->attributes['VacationHours'];
    }
    public function setVacationHours($VacationHours): void
    {
        $this
            ->attributes['VacationHours'] = $VacationHours;
    }
    public function getSickLeaveHours(): mixed
    {
        return $this
            ->attributes['SickLeaveHours'];
    }
    public function setSickLeaveHours($SickLeaveHours): void
    {
        $this
            ->attributes['SickLeaveHours'] = $SickLeaveHours;
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