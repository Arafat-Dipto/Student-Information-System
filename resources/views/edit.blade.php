@extends('layout.homeMaster')

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Student</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-7">

            <div class="card p-3">
                <h3>Fill the Student Information Form</h3>
                <form action="" enctype="multipart/form-data" method="POST">
                    @csrf

                    <label>Name</label>
                    <input type="text" name="name" value="{{ $student->name }}"  class="form-control"><br>
                    <label>Gender</label><br>
                    <select name="gender" id=""  value="{{ $student->gender }}"  class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br>
                    <label>Email</label>
                    <input type="email" name="email"  value="{{ $student->email }}"  class="form-control"><br>
                    <label>Mobile</label>
                    <input type="number" name="mobile" value="{{ $student->mobile }}"  class="form-control"><br>
                    <label>Class</label>
                    <input type="text" name="class" value="{{ $student->class }}"  class="form-control"><br>
                    <label>Education Year</label>
                    <input type="text" name="edu_year" value="{{ $student->edu_year }}"  class="form-control"><br>
                    <label>Address</label><br>
                    <textarea name="address" class="form-control" id="" cols="10" rows="5">{{ $student->address }}</textarea><br>
                    <label>Photo</label>
                    <img src="{{ asset('/images/'.$student->photo) }}" alt="" width="20%">
                <input type="hidden" name="prev_img" value="{{ $student->photo }}" >
                <input type="file" name="photo" accept="image/*" class="form-control mb-3">
                    <br>
                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Add">
                </form>
            </div>
        </div>
        <div class="col-lg-5">

        </div>
    </div>
    </div>
@endsection