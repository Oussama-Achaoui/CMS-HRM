<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'role',
    ];

    // Relationships
    public function files()
    {
        return $this->hasMany(EmployeeFile::class);
    }

    public function leaveRequests()
    {
        return $this->hasMany(LeaveRequest::class);
    }

    public function performanceReviews()
    {
        return $this->hasMany(PerformanceReview::class);
    }
}
