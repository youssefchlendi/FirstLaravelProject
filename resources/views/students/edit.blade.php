@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="card-body">

            <form action="{{ url('students/' .$student->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$student->id}}" />
                <label>Name</label><br>
                <input type="text" name="student_name" id="student_name" value="{{$student->student_name}}" class="form-control"><br>
                <label>Course</label><br>
                <input type="text" name="course" id="course" value="{{$student->course}}" class="form-control"><br>
                <label>Fee</label><br>
                <input type="text" name="fee" id="fee" value="{{$student->fee}}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>

        </div>
    </div>

@stop
