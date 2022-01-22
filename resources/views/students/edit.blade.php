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
                <input type="text" name="student_name" id="student_name" value="{{old('student_name', $student->student_name)}}" class="form-control"><br>
                @error('student_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Course</label><br>
                <input type="text" name="course" id="course" value="{{old('course', $student->course)}}" class="form-control"><br>
                @error('course')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Fee</label><br>
                <input type="text" name="fee" id="fee" value="{{old('fee', $student->fee)}}" class="form-control"><br>
                @error('fee')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>

        </div>
    </div>

@stop
