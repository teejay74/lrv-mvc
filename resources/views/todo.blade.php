@extends('home')

@section('title')
    ToDo List
@endsection

@section('main_content')
    <h1>ToDo List</h1>

    @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach($todo as $el)
        <div><h2>{{ $el->title }}</h2>
            <p>{{ $el->description }}</p>
        </div>
    @endforeach
    <h2>Добавить задачу</h2>
    <form method="post" action="/todo/create">
        @csrf
        <input type="text" name="title" id="title" placeholder="Введите название задачи" class="form-control me-2">
        <input type="text" name="description" id="description" placeholder="Введите задачу" class="form-control"></input>
        <button type="submit" class="btn btn-lg btn-primary">Отправить</button>
    </form>


@endsection
