<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Models\Designations;
use App\Mail\Registration;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{ 
    
    public function create() { 
        $designations = Designations::all();
        return view('create',['designations'=>$designations]);
    }

    public function insert(Request $request) {
        
        $this->validate($request, [
            'emp_name' => 'required',
            'emp_email' => 'required',
            'emp_designation' => 'required'
        ]);
        $data = $request->input();
        $file_name = '';
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_path = $file->path();
            $extension = $file->extension();
            $file_name = $file->hashName();
            $file->move('images', $file_name);
        }
        $emp = new Employee;
        $emp->name = $data['emp_name'];
        $emp->email = $data['emp_email'];
        $emp->designation = $data['emp_designation'];
        $emp->photo = $file_name;
        $emp->save();

        return redirect('list')->with('status',"Insert successfully");
    }
    
    public function list() { 
        $employee_data = DB::select('SELECT * FROM `employee` left join designations ON employee.designation = designations.d_id');
        return view('list',['employee_data'=>$employee_data]);
    }

    public function edit($id) {
        $designations = Designations::all();
        $employee = Employee::find($id);
        return view('edit', ['designations'=>$designations], compact('employee'));
    }

    public function update(Request $request, $id) {
        $emp = Employee::find($id);
        $pre_image = $emp['photo'];

        $emp->name = $request->input('emp_name');
        $emp->email = $request->input('emp_email');
        $emp->designation = $request->input('emp_designation');
        $file_name = $pre_image;
        
        if ($request->hasFile('photo')) {
            if (file_exists('images/'.$pre_image)){
                @unlink('images/'.$pre_image);
            }

            $file = $request->file('photo');
            $file_path = $file->path();
            $extension = $file->extension();
            $file_name = $file->hashName();
            $file->move('images', $file_name);
        }

        $emp->photo = $file_name;
        $emp->update();
        return redirect('list')->with('status',"Employee Updated successfully");
    }

    public function delete($id) {
        $employee = Employee::find($id);
        $currentImage  = $employee['photo'];

        if (file_exists('images/'.$currentImage)){
            @unlink('images/'.$currentImage);
        }
        $employee->delete();
        return redirect()->back()->with('status','Employee Deleted Successfully');
    }
}
