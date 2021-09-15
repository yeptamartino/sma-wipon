<?php

namespace App\Http\Controllers;

use\App\Student;
use Image;
use Flash;
use Illuminate\Http\Request;

class StudentController extends Controller

{
    protected $student;

    public function __construct(Student $student) 

    {
        $this->student = $student;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search == "" || $search == "0")
            
        { $student_search = ""; 
        
        }else
        
        { $student_search = " AND name like '%".$search."%'"; }
    
        $student = Student::whereRaw('1 '.$student_search)
        ->orderBy('name','asc')
        ->paginate(10);
        return view('student.index', compact('student'));

    }

    public function create()

    {
        return view('student.create');
    }

    public function store(Request $request)

    {
        $student               = new Student;
        $student->name         = $request->name;
        $student->nis         = $request->nis;
        $student->telephone    = $request->telephone;
        $student->email        = $request->email;
        $student->description  = $request->description;

        if ($request->photo != null) 
        
        {
            $imageName       = time() . '.' . $request->photo->getClientOriginalExtension();
            $student->photo     = './images/student-foto/' . $imageName;
            $request->photo->move(public_path('images/student-foto'), $imageName);
            $img             = Image::make(public_path('images/student-foto/' . $imageName));
            $img->save();
        } 
        
        else 
        
        { $image->photo    = './images/default_product.jpg'; }

        $student->save();
        Flash::Success('Student Created Successfully.');
        return redirect('/students');

    }

    public function show(Student $student)

    {
        return view('student.show', compact('student'));
    }

    public function edit(Student $student)

    {
        return view('student.edit', compact('student'));

    }

    public function update(Request $request, $id)

    {
        $student                = Student::find($id);
        $student->name          = $request->input('name');
        $student->nis           = $request->input('nis');
        $student->telephone     = $request->input('telephone');
        $student->email         = $request->input('email');
        $student->description   = $request->input('description');

        if ($request->photo != null) 
        
        {
            $imageName       = time() . '.' . $request->photo->getClientOriginalExtension();
            $student->photo     = './images/student-foto/' . $imageName;
            $request->photo->move(public_path('images/student-foto'), $imageName);
            $img             = Image::make(public_path('images/student-foto/' . $imageName));
            $img->save();
        }

        $student->save();
        Flash::Success('Student Updated Successfully.');
        return redirect('/students');
        
    }

    public function destroy($id)

    {
        $student = Student::find($id);
        $student->delete();
        Flash::error('Student Deleted Successfully.');
        return redirect('/students');
    }
}
