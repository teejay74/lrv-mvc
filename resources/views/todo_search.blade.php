@extends('home')


@section('title')
    Search ToDO
@endsection

@section('main_content')
    @if($todo_search)
    <h2>{{ $todo_search->title }}</h2>
    <div>{{ $todo_search->description }}</div>
    @else
    <h2>Задача не существует</h2>
    @endif

@endsection
