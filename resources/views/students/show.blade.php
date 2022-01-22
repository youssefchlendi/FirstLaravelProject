@extends('students.layout')
@section('content')


    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $student->student_name }}</h5>
                <p class="card-text">Address : {{ $student->course }}</p>
                <p class="card-text">Phone : {{ $student->fee }}</p>
            </div>

            <hr>

        </div>
    </div>
@stop
