@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="card-body">

            <form action="{{ url('students') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label><br>
                <input type="text" name="student_name" id="student_name" value="{{old('student_name')}}" class="form-control"><br>
                @error('student_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Course</label><br>
                <input type="text" name="course" id="course" value="{{old('course')}}" class="form-control"><br>
                @error('course')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Fee</label><br>
                <input type="text" name="fee" id="fee" value="{{old('fee')}}" class="form-control"><br>
                @error('fee')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>

        </div>
    </div>

@stop
