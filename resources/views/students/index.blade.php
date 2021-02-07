@extends('students.layout')

@section('content')

<div>
    <button href="{{route('students.create')}}">Create New Student</button>
</div>
@if ($message = Session::get('success'))
    <div>
        <p>{{$message}}</p>
    </div>
@endif


@foreach ($students as $student)
    <div>{{$student->name}}</div>
@endforeach

@csrf

@endsection
