@extends('layout.homeMaster')

@section('content')


   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Students</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="d-flex">
                    <div class="col-md-8 mb-3">
                        <form action="{{ url('/search') }}" method="GET" class="d-flex">
                        <input type="text" class="form-control" name="search_value" placeholder="Search..."> &nbsp;&nbsp; <input type="submit" class="btn btn-outline-secondary btn-md" name="Search" value="Search">
                    </form>
                </div>
                <div class="col-md-4 mb-3">
                    <a class="btn btn-primary" href="{{ route('student.create') }}">Create</a>
                </div>
                </div>
               
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Class</th>
                                <th>Education Year</th>
                                <th>Address</th>
                                <th>Photo</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $key => $student)
                                <tr>

                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->edu_year }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td><img src="{{ asset('/images/'.$student->photo) }}" alt="" width="20%"></td>
                                    <td>
                                        <a href="{{ route('student.edit',$student->id) }}">Edit</a>&nbsp;&nbsp;
                                        <a onclick="return confirm('are you sure?');" href="{{ route('student.delete',$student->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $students->links() }}

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

        </div>
    </div>
@endsection