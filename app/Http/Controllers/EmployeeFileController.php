<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Models\EmployeeFile;
use App\Models\Employee;


class EmployeeFileController extends Controller
{
    public function index()
    {
        $employeeFiles = EmployeeFile::all();
        return view('employee-files.index', compact('employeeFiles'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('employee-files.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'file_type' => 'required',
            'file' => 'required|file|max:10240', // Adjust the max file size as needed
        ]);

        $file = $request->file('file');
        $filePath = $file->storeAs('employee_files', $file->getClientOriginalName(), 'public');

        EmployeeFile::create([
            'employee_id' => $request->input('employee_id'),
            'file_type' => $request->input('file_type'),
            'file_name' => $request->input('file_name'),
            'file_path' => $filePath,
        ]);

        return redirect()->route('employee-files.index')->with('success', 'Employee file created successfully');
    }

    public function show($id)
    {
        $employeeFile = EmployeeFile::find($id);
        return view('employee-files.show', compact('employeeFile'));
    }

    public function edit($id)
    {
        $employeeFile = EmployeeFile::find($id);
        $employees = Employee::all();
        return view('employee-files.edit', compact('employeeFile', 'employees'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'employee_id' => 'required',
            'file_type' => 'required',
            'file' => 'file|max:10240', // Adjust the max file size as needed
        ]);

        $employeeFile = EmployeeFile::find($id);

        // Update other fields
        $employeeFile->update([
            'employee_id' => $request->input('employee_id'),
            'file_type' => $request->input('file_type'),
            'file_name' => $request->input('file_name'),
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->storeAs('employee_files', $file->getClientOriginalName(), 'public');
            $employeeFile->update(['file_path' => $filePath]);
        }

        return redirect()->route('employee-files.index')->with('success', 'Employee file updated successfully');
    }
    public function destroy($id)
    {
        $employeeFile = EmployeeFile::find($id);
        $employeeFile->delete();

        return redirect()->route('employee-files.index')->with('success', 'Employee file deleted successfully');
    }

    public function download($id)
    {
        $employeeFile = EmployeeFile::findOrFail($id);

        $filePath = Storage::disk('public')->path($employeeFile->file_path);

        // You can customize the headers based on your needs
        return response()->download($filePath, $employeeFile->file_name, [
            'Content-Type' => mime_content_type($filePath),
        ]);
    }
}
