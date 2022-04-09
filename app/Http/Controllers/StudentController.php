<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('index', compact('students'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(request(), [
            'name'      => 'required',
            'gender'    => 'required',
            'email'     => 'required|unique:students,email',
            'mobile'    =>'required',
            'class'     => 'required',
            'edu_year'  => 'required',
            'address'   => 'required',
            'photo'     => 'required'
        ]);

        $img = uniqid().'.jpg';
        $request->photo->move('images', $img);

        Student::create([
            'name'     => request('name'),
            'gender'   => request('gender'),
            'email'    => request('email'),
            'mobile'   =>request('mobile'),
            'class'    => request('class'),
            'edu_year' => request('edu_year'),
            'address'  => request('address'),
            'photo'    => $img,
        ]);
        return redirect('/');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact(['student']));
    }

    public function update(Request $request)
    {
        $image = Student::find(request('photo'));
        File::delete('images/', $image);


        $new_img = uniqid().'.jpg';
        $request->photo->move('images', $new_img);
        Student::find(request('id'))->update([
            'name'     => request('name'),
            'gender'   => request('gender'),
            'email'    => request('email'),
            'mobile'   =>request('mobile'),
            'class'    => request('class'),
            'edu_year' => request('edu_year'),
            'address'  => request('address'),
            'photo'    => $new_img,

        ]);
        return redirect('/');
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        return redirect()->back();
    }

    public function search()
    {
        $search = request('search_value');
        $students = Student::where('name', 'LIKE', '%'.$search.'%')->paginate(5);
        return view('index', compact('students'));
    }
}
