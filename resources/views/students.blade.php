@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        {{$i = 1}}
        @foreach($all_students as $student)
            <tr>
                <td>{{$i++}}</td>
                <td>{{ $student->Name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection



