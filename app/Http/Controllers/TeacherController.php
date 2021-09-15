<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Teacher;
use Image;
use Flash;

class TeacherController extends Controller

{
    protected $teacher;

    public function __construct(Teacher $teacher) 

    {
        $this->teacher = $teacher;
    }

    public function index(Request $request)

    {
        $search = $request->input('search');

        if($search ==""||$search=="0")
            
        { $teacher_search = ""; }
        
        else
        
        { $teacher_search = " AND name like '%".$search."%'"; }
    
        $teacher = Teacher::whereRaw('1 '.$teacher_search)
        ->orderBy('name','asc')
        ->paginate(10);
        return view('teacher.index', compact('teacher'));

    }

    public function create()

    {
        return view('teacher.create');
    }

    public function store(Request $request)

    {
        $teacher                = new Teacher;
        $teacher->name          = $request->name;
        $teacher->telephone     = $request->telephone;
        $teacher->email         = $request->email;
        $teacher->description   = $request->description;

        if ($request->photo != null) 
        
        {
            $imageName          = time() . '.' . $request->photo->getClientOriginalExtension();
            $teacher->photo     = './images/teacher-foto/' . $imageName;
            $request->photo->move(public_path('images/teacher-foto'), $imageName);
            $img                = Image::make(public_path('images/teacher-foto/' . $imageName));
            $img->save();
        } 
        
        else 

        { $image->photo    = './images/default_product.jpg'; }

        $teacher->save();
        Flash::success('Teacher Created Successfully.');
        return redirect('/teachers');

    }

    public function show(Teacher $teacher)

    {
        return view('teacher.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)

    {
        return view('teacher.edit', compact('teacher'));

    }

    public function update(Request $request, $id)

    {
        $teacher                = Teacher::find($id);
        $teacher->name         = $request->input('name');
        $teacher->telephone         = $request->input('telephone');
        $teacher->email         = $request->input('email');
        $teacher->description   = $request->input('description');

        if ($request->photo != null) 
        
        {
            $imageName       = time() . '.' . $request->photo->getClientOriginalExtension();
            $teacher->photo     = './images/teacher-foto/' . $imageName;
            $request->photo->move(public_path('images/teacher-foto'), $imageName);
            $img             = Image::make(public_path('images/teacher-foto/' . $imageName));
            $img->save();
        }

        $teacher->save();
        Flash::success('Teacher Updated Successfully.');
        return redirect('/teachers');
        
    }

    public function destroy($id)

    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        Flash::error('Teacher Deleted Successfully.');
        return redirect('/teachers');
    }
}
