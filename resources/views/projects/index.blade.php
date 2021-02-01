@extends('layout')

@section('title')
    Projects
@endsection

@section('content')
    Projects
@endsection

@section('data')
    <h1>Projects List</h1>
    @foreach($projects as $project)
        Title: {{ $project->title }}<br>
        Description: {{ $project->description }}<br>
    @endforeach
@endsection
