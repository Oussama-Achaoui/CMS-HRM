<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'file_path',
        'description',
        // Add other attributes as needed
    ];

    // Relationships
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
