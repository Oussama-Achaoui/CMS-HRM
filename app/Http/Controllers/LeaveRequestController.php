<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveRequest;
use App\Models\Employee;

class LeaveRequestController extends Controller
{
    public function index()
    {
        $leaveRequests = LeaveRequest::all();
        return view('leave-requests.index', compact('leaveRequests'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('leave-requests.create', compact('employees'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'employee_id' => 'required',
            'type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required',
        ]);

        // Create a new leave request
        LeaveRequest::create($validatedData);

        // Redirect to the leave requests index page
        return redirect()->route('leave-requests.index')->with('success', 'Leave request created successfully');
    }

    public function show($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        return view('leave-requests.show', compact('leaveRequest'));
    }

    public function edit($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $employees = Employee::all();
        return view('leave-requests.edit', compact('leaveRequest', 'employees'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'employee_id' => 'required',
            'type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required',
        ]);

        // Update the leave request
        $leaveRequest = LeaveRequest::findOrFail($id);
        $leaveRequest->update($validatedData);

        // Redirect to the leave requests index page
        return redirect()->route('leave-requests.index')->with('success', 'Leave request updated successfully');
    }

    public function destroy($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $leaveRequest->delete();

        // Redirect to the leave requests index page
        return redirect()->route('leave-requests.index')->with('success', 'Leave request deleted successfully');
    }
}
